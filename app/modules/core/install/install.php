<?php
/**
* @package   app
* @subpackage core
* @author    app
* @copyright 2023 app
* @link      
* @license    All rights reserved
*/


class coreModuleInstaller extends \Jelix\Installer\Module\Installer {

    function install(\Jelix\Installer\Module\API\InstallHelpers $helpers) {
        //$helpers->database()->execSQLScript('sql/install');

        /*
        jAcl2DbManager::createRight('my.right', 'core~acl.my.right', 'right.group.id');
        jAcl2DbManager::addRight('admins', 'my.right'); // for admin group
        */
    }
}
