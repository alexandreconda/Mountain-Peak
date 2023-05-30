<?php
/**
* @package   app
* @subpackage core
* @author    app
* @copyright 2023 app
* @link      
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
     *
     */
    function index() {
        $rep = $this->getResponse('html');

        $rep->title = 'CRUD';
        $rep->bodyTpl = 'core~main';
        $rep->body->assignZone('MAIN', 'crud');

        return $rep;
    }
}

