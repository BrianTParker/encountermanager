<?php
/**********************************INCLUDE*********************************** *
* **************************************************************************** */


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
class TwentySideDie {
    
    // min/max values for the die -nm
    const MIN = 1;
    const MAX = 20;
    
    public static function roll(){
        
        return rand( TwentySideDie::MIN, TwentySideDie::MAX );
    }
}
