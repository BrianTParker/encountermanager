<?php 
include 'header.php'; 
include_once( __DIR__ . '/php/actor/Actor.php' );
include_once( __DIR__ . '/php/enc/EncounterManager.php' );
?>





<?php

$ENC_MGR = EncounterManager::getInstance();

$actors = array();
$actors[] = new Actor("Brian", -2);
$actors[] = new Actor("Nick", 5);
$actors[] = new Actor("Chris", 2);


foreach ($actors as $actor) {
    
    $ENC_MGR->add( $actor );
}

echo $ENC_MGR;

$ENC_MGR->reset();
?>







<?php include 'footer.php'; ?>