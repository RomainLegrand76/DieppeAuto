<?php
date_default_timezone_set('Europe/Paris');
/*include_once('./classes/Voiture.php');
include_once('./classes/VoitureElectrique.php');
include_once('./classes/log.php');*/

include_once('function/classAutoLoader.php');
spl_autoload_register('classAutoLoader');

$erreur = 'Ceci est une erreur';
Log::logWrite($erreur);

$voiture1 = new Voiture("vert", 10);
$voiture1 -> marque = 'Opel';
$voiture1 -> modele = 'Corsa';
//$voiture1 -> couleurDominante = 'Gris';
//$voiture1 -> masse = 1000;
$voiture1 -> vitesse = 15;


echo '<pre>';
var_dump($voiture1);
echo '</pre>';

$voiture1 -> vitesse = 15;

$voiture1 -> peindre('bleu');


echo '<pre>';
var_dump($voiture1);
echo '</pre>';

$voiture1->afficherMessage();
echo '<br/>';
$voiture1->energieCinetique();


?>
