<?php 
include 'header.php'; 
include_once( __DIR__ . '/php/actor/Actor.php' );
?>





<?php

$actors = array();
$actors[] = new Actor("Brian", -2);
$actors[] = new Actor("Nick", 5);
$actors[] = new Actor("Chris", 2);



usort($actors, array("Actor", "compare"));


foreach ($actors as $actor) {
    echo $actor->getId() . " " . $actor->getTotal() . "<br/>" . "\n";
}





?>







<?php include 'footer.php'; ?>