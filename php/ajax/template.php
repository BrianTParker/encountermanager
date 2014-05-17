<?php
/**********************************INCLUDE*********************************** *
* **************************************************************************** */


/**
 *
 *************************************************************************** *
 * Example (JavaScript/JQuery):
 * ************************************************************************** *
 *
 *************************************************************************** *
 * @param
 * $_POST - Each key/value pair is copied into an item array; then the item
 * 			is added to the cart
 *************************************************************************** *
 * @return 
 * On Success: 		
 * On Exception: 	JSON	- file, line, and message of the exception
 *************************************************************************** *
 * @author(s) nicholas malacarne <nicholas.malacarne@gmail.com>
 */
try {

    
}catch( Exception $e ){
    
    $report = array();
    
    $report[ 'file' ] 		= $e->getFile();
    $report[ 'line' ] 		= $e->getLine();
    $report[ 'message' ] 	= $e->getMessage();
    
	// return exception report as JSON -nm
    echo json_encode( $report );
}

exit();
