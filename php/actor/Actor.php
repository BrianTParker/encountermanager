<?php
/**********************************INCLUDE*********************************** *
* **************************************************************************** */
include_once( __DIR__ . '/../dice/TwentySideDie.php' );

/**
 *
 *
 *************************************************************************** *
 * Example:
 * ************************************************************************** *
 *
 *************************************************************************** *
 * @author(s) nicholas malacarne <nicholas.malacarne@gmail.com>, Brian Parker <brithom.parker@gmail.com>
 */
class Actor {
    
    // id for the actor -nm
    private $id;
    
    // modifier for initiative roll -nm
    private $mod;
    
    // dice roll value -nm
    private $roll;
    
    function __construct( $aId, $aMod ) {
        
        // set id and mod values -nm
        $this->id = $aId;
        $this->mod = $aMod;
        
        // get random die roll value -nm
        $this->roll = TwentySideDie::roll();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getMod() {
        return $this->mod;
    }

    public function getRoll() {
        return $this->roll;
    }

    public function getInitiative(){
        return $this->mod + $this->roll;
    }
    
    public function __toString() {
        // TODO: return id? -nm
    }

    public static function compare( Actor &$a, Actor &$b ){
        
        if ($a == $b) {
			return 0;
		}
		return ($a->getInitiative() < $b->getInitiative()) ? 1 : -1;
    }
}
