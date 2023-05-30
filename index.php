<?php
/**
* @package   app
* @subpackage 
* @author    app
* @copyright 2023 app
* @link      
* @license    All rights reserved
*/

require ('app/application.init.php');
require (JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php');

checkAppOpened();

jApp::loadConfig('index/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new jClassicRequest());



