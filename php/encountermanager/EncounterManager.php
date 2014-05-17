<?php
/**********************************INCLUDE*********************************** *
* **************************************************************************** */
include_once( __DIR__ . '/../ASessionSingleton.php' );
include_once( __DIR__ . '/../actor/Actor.php' );

/**
 *
 *
 *************************************************************************** *
 * Example:
 * ************************************************************************** *
 *
 *************************************************************************** *
 * @author(s) nicholas malacarne <nicholas.malacarne@gmail.com>
 */
class EncounterManager extends ASessionSingleton {
    
    // all actors -nm
    private $actors = array();
    
    // current round number -nm
    private $roundCount = 0;
    
    // TODO: track whos turn it is -nm
    
    public function add( Actor $aActor ){
        
        // TODO: add actor to list -nm
    }
    
    public function remove( $aId ){
        
        // TODO: remove actor from list by id value -nm
    }
    
    public function step(){
        
        // TODO: handle stepping a turn -nm
    }
    
    public function getJSON(){
        
        // TODO: build map of encounter data -nm
        // TODO: return json_encode(map) -nm
    }
    
    private function sort(){
        
        // TODO: sort actor list descending order by initiative -nm
    }
}
