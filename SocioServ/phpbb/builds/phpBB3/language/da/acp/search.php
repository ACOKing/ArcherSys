<?php
/** 
*
* acp_search [Danish]
*
* @package language
* @version $Id: search.php,v 1.20 2007/07/15 12:09:54 kellanved Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Her kan du ændre og vedligeholde søgningen i søgemotorens indekser. Da du normalt kun bruger én motor bør alle de indekser du ikke bruger slettes. Efter ændring i søgeindstillingerne (f.eks. antallet af minimum og maksimum antal tegn), kan det være værd at overveje at genskabe indekset, for at afspejle disse ændringer.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Her defineres hvilke metoder søgemotoren skal anvende for at indeksere indlæg og udføre søgninger. Du kan definere flere muligheder, som påvirker hvor meget behandling de enkelte søgninger kræver. Nogle af indstillingerne er identiske for alle søgemotorer.',

	'COMMON_WORD_THRESHOLD'					=> 'Grænse for definition af et alment ord',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Hvis et ord er indeholdt i en større procentdel af alle indlæg end det her angivne betragtes det som et alment ord der ignoreres i søgningen. Grænsen deaktiveres med 0. Virker først når der er over 100 indlæg at søge på.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Er du sikker på at du vil skifte til en anden søgemotor? Når du har skiftet til en ny søgemotor, er du nødt at lave et nyt indeks til denne. Hvis ikke du har planer om at skifte tilbage til den tidligere anvendte søgemotor, kan du med fordel slette dennes indeks, det vil frigøre systemressourser.',
	'CONTINUE_DELETING_INDEX'				=> 'Fortsæt den tidligere startede sletteproces af søgeindekset',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Der er blevet startet en sletteproces for et indeks. For at kunne tilgå søgeindekssiden igen, skal denne proces færdiggøres eller afbrydes.',
	'CONTINUE_INDEXING'						=> 'Fortsæt tidligere indekseringsproces',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Der er blevet startet en indekseringsproces. For at kunne tilgå søgeindekssiden igen, skal denne proces færdiggøres eller afbrydes.',
	'CREATE_INDEX'							=> 'Opret indeks',

	'DELETE_INDEX'							=> 'Slet indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sletning af indeks er i gang',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Søgemotoren er ved at slette indeks. Det kan tage nogle minutter.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL\'s fuldtekstsøgemotor kan kun bruges fra MySQL4 og nyere.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL\'s fuldtekstindeksering kan kun anvendes sammen med MyISAM tabeller.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Det totale antal indekserede indlæg',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Understøttelse af UTF-8 tegnsæt under mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Understøttelse af UTF-8 tegnsæt under PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Hvis PCRE ikke har unicode tegnegenskaber, vil søgemotoren forsøge at anvende mbstring\'s almindelige tegn-egenskaber.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'		=> 'Denne søgemotor kræver PCRE unicode tegn-egenskaber, som kun er tilgængelig i PHP 4.4, 5.1 og over, hvis du ønsker at søge med unicode UTF-8 tegn.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Generelle søgeindstillinger',
	'GO_TO_SEARCH_INDEX'					=> 'Gå til søgeindekssiden',

	'INDEX_STATS'							=> 'Indeksstatistikker',
	'INDEXING_IN_PROGRESS'					=> 'Indeksering er under udførsel',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Søgemaskinen er i øjeblikket ved at indeksere alle indlæg på boardet. Det kan tage fra nogle få minutter til flere timer afhængig af boardets størrelse.',

	'LIMIT_SEARCH_LOAD'						=> 'Grænse for søgningens belastning af systemet',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hvis systemets belastning overskrider denne værdi i mere end 1 minut, vil søgesiden gå offline, 1.0 svarer til ~100% belastning af en processor. Denne funktion virker kun på UNIX-baserede servere.',

	'MAX_SEARCH_CHARS'						=> 'Maksimalt antal tegn for indeksering til søgninger',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Ord på mindre end dette antal tegn vil blive indekseret til brug for søgninger.',
	'MIN_SEARCH_CHARS'						=> 'Minimalt antal tegn for indeksering til søgninger',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Ord på mindst dette antal tegn vil blive indekseret til brug for søgninger.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Mindste antal tegn for forfatternavn',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Brugere skal angive mindst dette antal tegn i navnet, for at udføre en søgning efter forfatter ved anvendelse af (*) som ubekendt. Hvis forfatterens brugernavn er kortere end dette antal tegn, kan der søges efter dennes indlæg ved at angive forfatterens fulde brugernavn.',

	'PROGRESS_BAR'							=> 'Statuslinie',

	'SEARCH_GUEST_INTERVAL'					=> 'Gæsters søgeinterval',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Det antal sekunder en gæst skal vente mellem søgninger. Hvis én gæst søger, må alle andre gæster vente indtil dette tidsinterval er overskredet.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Alle indlæg til og med indlægs-ID %1$d er blevet indekseret, heraf %2$d indlæg i dette trin.<br />I øjeblikket indekseres ca. %3$.1f indlæg i sekundet<br />Igangværende indeksering ...',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Alle indlæg til og med indlæg %1$d er blevet fjernet fra søgeindekset.<br />Igangværende fjernelse af indlæg ...',
	'SEARCH_INDEX_CREATED'					=> 'Alle boardets indlæg er nu indekserede.',
	'SEARCH_INDEX_REMOVED'					=> 'Søgemotorens søgeindeks er nu slettet.',
	'SEARCH_INTERVAL'						=> 'Brugeres søgeinterval',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Det antal sekunder en bruger skal vente mellem søgninger. Intervallet kontrolleres individuelt pr. bruger.',
	'SEARCH_STORE_RESULTS'					=> 'Antal sekunder søgningens mellemlager opretholdes',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Mellemlagrede søgeresultater slettes efter dette tidsinterval i sekunder. Sættes til 0 hvis du ønsker at deaktivere søgemellemlager.',
	'SEARCH_TYPE'							=> 'Valg af søgemotor',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB giver mulighed for at vælge den søgemotor som bruges til søge i indlægsteksterne. I standard indstillingen anvendes phpBB\'s indbyggede fuldtekstsøgning.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Du har skiftet søgemotor. For at bruge den nye motor skal du sikre at denne har et indeks.',

	'TOTAL_WORDS'							=> 'Antal indekserede ord i alt',
	'TOTAL_MATCHES'							=> 'Antal indekserede ord til indlæg relationer i alt',

	'YES_SEARCH'							=> 'Aktivér søgefaciliteter',
	'YES_SEARCH_EXPLAIN'					=> 'Aktiverer brugerfladen som giver søgemulighederne, inklusiv brugersøgninger.',
	'YES_SEARCH_UPDATE'						=> 'Aktivér fuldtekst opdatering',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Opdatering af fuldtekstindekset når der skrives nye indlæg, ignoreres hvis søgefaciliteter er deaktiverede.',
));

?>