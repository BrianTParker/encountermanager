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
        
        array_push( $this->actors, $aActor );
        
        $this->sort();
    }
    
    public function remove( $aId ){
        
        // TODO: remove actor from list by id value -nm
    }
    
    public function step(){
        
        // increment round count -nm
        $this->roundCount++;
        
        // TODO: handle stepping a turn -nm
    }
    
    public function getJSON(){
        
        // TODO: build map of encounter data -nm
        // TODO: return json_encode(map) -nm
        
        // test; remove later -nm
        print_r( $this );
    }
    
    public function reset(){
        
        $this->actors = array();
        // TODO: reset round count -nm
    }
    
    public function __toString() {
        
        $str = "";
        
        foreach ( $this->actors as $actor ){
            
            $str .= $actor->getId();
            $str .= "\t";
            $str .= $actor->getTotal();
            $str .= "<br>";
        }
        
        return $str;
    }
    
    private function sort(){
        
        usort($this->actors, array("Actor", "compare")); 
    }
}
