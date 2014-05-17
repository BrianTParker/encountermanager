<?php
/**********************************INCLUDE*********************************** *
* **************************************************************************** */
include_once( __DIR__ . '/../enc/EncounterManager.php' );

/**
 * RUN: http://localhost/encountermanager/php/ajax/NewEncounter.php
 *************************************************************************** *
 * Example (JavaScript/JQuery):
 * ************************************************************************** *
 *
 *************************************************************************** *
 * @param none
 *************************************************************************** *
 * @return 
 * On Success: 		JSON    - encounter manager data
 * On Exception: 	JSON	- file, line, and message of the exception
 *************************************************************************** *
 * @author(s) nicholas malacarne <nicholas.malacarne@gmail.com>
 */
try {

    $ENC_MGR = EncounterManager::getInstance();
    
    $ENC_MGR->reset();
    
    $ENC_MGR->getJSON();
    
}catch( Exception $e ){
    
    $report = array();
    
    $report[ 'file' ] 		= $e->getFile();
    $report[ 'line' ] 		= $e->getLine();
    $report[ 'message' ] 	= $e->getMessage();
    
	// return exception report as JSON -nm
    echo json_encode( $report );
}

exit();
