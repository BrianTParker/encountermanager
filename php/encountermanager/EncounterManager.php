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
    
    public function add( Actor $aActor ){
        
        // TODO: add actor to list -nm
    }
    
    public function step(){
        
        // TODO: handle stepping a turn -nm
    }
    
    private function sort(){
        
        // TODO: sort actor list descending order by initiative -nm
    }
}
