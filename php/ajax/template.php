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
