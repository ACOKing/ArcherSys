<?php
/**
 * ownCloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alessandro Cosentino <cosenal@gmail.com>
 * @author Bernhard Posselt <dev@bernhard-posselt.com>
 * @copyright Alessandro Cosentino 2012
 * @copyright Bernhard Posselt 2012, 2014
 */

namespace OCA\News\ArticleEnhancer;

use DOMDocument;
use DOMXpath;

use PicoFeed\Encoding\Encoding;

use OCA\News\Utility\PicoFeedClientFactory;

use OCA\News\Db\Item;


class XPathArticleEnhancer implements ArticleEnhancer {

    private $maximumTimeout;
    private $clientFactory;
    private $regexXPathPair;


    /**
     * @param \Utility\PicoFeedClientFactory $clientFactory
     * @param array $regexXPathPair an associative array containing regex to
     * match the url and the xpath that should be used for it to extract the
     * page
     */
    public function __construct(PicoFeedClientFactory $clientFactory,
                                array $regexXPathPair){
        $this->clientFactory = $clientFactory;
        $this->regexXPathPair = $regexXPathPair;
    }

    /**
     * @param \OCA\News\Db\Item $item
     * @return \OCA\News\Db\Item enhanced item
     */
    public function enhance(Item $item){

        foreach($this->regexXPathPair as $regex => $search) {

            if(preg_match($regex, $item->getUrl())) {
                $body = $this->getFile($item->getUrl());

                // First check if either <meta charset="..."> or
                // <meta http-equiv="Content-Type" ...> is specified and use it
                // If this fails use mb_detect_encoding()
                $regex = '/<meta\s+[^>]*(?:charset\s*=\s*[\'"]([^>\'"]*)[\'"]' .
                         '|http-equiv\s*=\s*[\'"]content-type[\'"]\s+[^>]*' .
                         'content\s*=\s*[\'"][^>]*charset=([^>]*)[\'"])[^>]*>' .
                         '/i';
                if(preg_match($regex, $body, $matches)) {
                    $enc = strtoupper($matches[sizeof($matches) - 1]);
                } else {
                    $enc = mb_detect_encoding($body);
                }
                $enc = $enc ? $enc : 'UTF-8';
                $body = mb_convert_encoding($body, 'HTML-ENTITIES', $enc);
                if (trim($body) === '') {
                    return $item;
                }

                $dom = new DOMDocument();
                @$dom->loadHTML($body);

                $xpath = new DOMXpath($dom);
                $xpathResult = $xpath->evaluate($search);

                // in case it wasnt a text query assume its a dom element and
                // convert it to text
                if(!is_string($xpathResult)) {
                    $xpathResult = $this->domToString($xpathResult);
                }

                $xpathResult = trim($xpathResult);

                // convert all relative to absolute URLs
                $xpathResult = $this->substituteRelativeLinks(
                    $xpathResult, $item->getUrl()
                );

                if($xpathResult) {
                    $item->setBody($xpathResult);
                }
            }
        }

        return $item;
    }


    private function getFile($url) {
        $client = $this->clientFactory->build();
        $client->execute($url);
        $client->setUserAgent('Mozilla/5.0 AppleWebKit');
        return $client->getContent();
    }


    /**
     * Method which converts all relative "href" and "src" URLs of
     * a HTML snippet with their absolute equivalent
     * @param string $xmlString a HTML snippet as string with the relative URLs
     * to be replaced
     * @param string $absoluteUrl the approptiate absolute url of the HTML
     * snippet
     * @return string the result HTML snippet as a string
     */
    protected function substituteRelativeLinks($xmlString, $absoluteUrl) {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;

        if($xmlString === '') {
            return false;
        }

        $xmlString = '<div>' . $xmlString . '</div>';
        $isOk = @$dom->loadHTML($xmlString, LIBXML_HTML_NOIMPLIED |
                                           LIBXML_HTML_NODEFDTD);

        if(!$isOk) {
            return false;
        }

        foreach (['href', 'src'] as $attribute) {
            $xpath = new DOMXpath($dom);
            $xpathResult = $xpath->query(
                "//*[@" . $attribute . " " .
                "and not(contains(@" . $attribute . ", '://')) " .
                "and not(starts-with(@" . $attribute . ", 'mailto:')) " .
                "and not(starts-with(@" . $attribute . ", '//'))]");
            foreach ($xpathResult as $linkNode) {
                $urlElement = $linkNode->attributes->getNamedItem($attribute);
                $abs = $this->relativeToAbsoluteUrl(
                    $urlElement->nodeValue, $absoluteUrl
                );
                $urlElement->nodeValue = htmlspecialchars($abs);
            }
        }

        $xmlString = $dom->saveHTML();

        // domdocument spoils the string with line breaks between the elements
        // strip them
        $xmlString = str_replace("\n", '', $xmlString);

        return $xmlString;
    }


    /**
     * Method which builds a URL by taking a relative URL and its corresponding
     * absolute URL
     * @param string $relativeUrl the relative URL
     * @param string $absoluteUrl the absolute URL with at least scheme and host
     * @return string the resulting absolute URL
     */
    protected function relativeToAbsoluteUrl($relativeUrl, $absoluteUrl) {
        $base = new \Net_URL2($absoluteUrl);
        return $base->resolve($relativeUrl);
    }


    /**
     * Method which turns an xpath result to a string
     * you can customize it by overwriting this method
     * @param mixed $xpathResult the result from the xpath query
     * @return string the result as a string
     */
    protected function domToString($xpathResult) {
        $result = '';
        foreach($xpathResult as $node) {
            $result .= $this->toInnerHTML($node);
        }
        return $result;
    }


    protected function toInnerHTML($node) {
        $dom = new DOMDocument();
        $dom->appendChild($dom->importNode($node, true));
        return trim($dom->saveHTML($dom->documentElement));
    }


}
