<?php
/**
* @package   app
* @subpackage core
* @author    app
* @copyright 2023 app
* @link      
* @license    All rights reserved
*/

class sommetsCtrl extends jController implements jIRestController {
    function get(){
        $rep = $this->getResponse('json');
        
        $db = jDb::getConnection();
        $query = $db->query("
            SELECT nom, latitude, longitude, altitude 
            FROM core.sommets
        ");
        $values = array();
        while ($record = $query->fetch()) {
            $values[] = array('nom' => $record->nom, 'latitude' => $record->latitude, 'longitude' => $record->longitude, 'altitude' => $record->altitude);
        }
        $rep->data = $values;
        
        return $rep;
    }
    
    function post(){
        $rep = $this->getResponse('json');
        $nom = $this->param('nom');
        $latitude = $this->intParam('latitude');
        $longitude = $this->intParam('longitude');
        $altitude = $this->intParam('altitude');
        
        $db = jDb::getConnection();
        $query = $db->query
        ("
            INSERT INTO core.sommets (nom , latitude, longitude, altitude)
            VALUES (" . $db->quote($nom) . ", $latitude, $longitude, $altitude)
        ");
        $rep->data = array('post' => 'succes');
        
        return $rep;
    }
    
    function put(){
        $rep = $this->getResponse('json');
        $nom_ancien = $this->param('nom_ancien');
        $nom = $this->param('nom');
        $latitude = $this->intParam('latitude');
        $longitude = $this->intParam('longitude');
        $altitude = $this->intParam('altitude');
        
        $db = jDb::getConnection();
        $query = $db->query
        ("
            UPDATE core.sommets
            SET nom =" . $db->quote($nom) . ", latitude = $latitude, longitude = $longitude, altitude = $altitude
            WHERE nom = " . $db->quote($nom_ancien)
        );
        $rep->data = array('put' => 'succes');
        
        return $rep;
    }
    
    function delete(){
        $rep = $this->getResponse('json');
        $nom = $this->param('nom');
        $db = jDb::getConnection();
        $query = $db->query
        ("
            DELETE FROM core.sommets
            WHERE nom = " . $db->quote($nom)
        );
        $rep->data = array('delete' => 'succes');
        
        return $rep;
    }
}

