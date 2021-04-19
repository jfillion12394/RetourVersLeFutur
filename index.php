<?php


// 1) CREER 2 OBJETS DATES
$presentTime = new DateTime("now");
$destinationTime= new DateTime("1789-08-30 12:39");


// 2) AFFICHER LES DATES FORMATEES
echo getFormat($presentTime);
echo getFormat($destinationTime);
//  AFFICHER L'INTERVAL DE TEMPS
echo getInterval ($presentTime,$destinationTime);

// 3) retourner une date formattés sous forme d'une chaine de caractères
function getFormat(DateTime $date):string {
    (string)$myDate = $date->format("M d Y A H:i");
    return StrtoUpper($myDate)  . PHP_EOL;
}

//calculer le temps passé entre 2 dates
function getInterval(DateTime $debut, DateTime $fin):string {
    $interval = $debut->diff($fin);
    $temps =  $interval->format('%y années ') . $interval->format('%m mois ') . $interval->format('%d jours ') . $interval->format('%h heures ') . $interval->format('%i minutes '); 
    return $temps;
}