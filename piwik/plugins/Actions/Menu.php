<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\Actions;

use Piwik\Menu\MenuReporting;

class Menu extends \Piwik\Plugin\Menu
{
    public function configureReportingMenu(MenuReporting $menu)
    {
        $urlParams = array(
            'module' => 'Actions',
            'action' => 'menuGetPageUrls'
        );

        $menu->addActionsItem('', $urlParams, 15);

        $actions = new Actions();
        if ($actions->isSiteSearchEnabled()) {
            $menu->addActionsItem('Actions_SubmenuSitesearch', array('module' => 'Actions', 'action' => 'indexSiteSearch'), 5);
        }
    }

}
