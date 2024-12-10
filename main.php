<?php

require_once 'Gos.php';
require_once 'Gat.php';

// Creem un Gos
$gos = new Gos("Gos");
echo $gos->getType() . " diu: ";
$gos->makeSound();

// Creem un Gat
$gat = new Gat("Gat");
echo $gat->getType() . " diu: ";
$gat->makeSound();

?>
