<?php

require_once 'Gos.php';
require_once 'Gat.php';

// Creem una instància de Gos
$gos = new Gos("Gos");
echo $gos->getType() . " diu: ";
$gos->makeSound();

// Creem una instància de Gat
$gat = new Gat("Gat");
echo $gat->getType() . " diu: ";
$gat->makeSound();

?>
