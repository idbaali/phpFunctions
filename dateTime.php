<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dateTime()</title>
</head>
<body>
    <h1>dateTime()</h1>
    <h2>Description</h2>
    <p>La classe DateTime en PHP permet de manipuler des dates et des heures. 
        Elle offre des fonctionnalités avancées pour la création, la modification et la comparaison de dates.</p>
    <h2>Exemple</h2>
<?php
$date = new DateTime();
echo $date->format("Y-m-d H:i:s");

/* Cela affichera une date sous la forme "2022-01-18 10:30:00", 
qui est la date actuelle formatée selon le format spécifié "Y-m-d H:i:s" (année-mois-jour heure:minute:seconde).*/
?><br>

<?php 

/* On peut aussi utiliser une date donnée :*/

$date = new DateTime("2022-12-25");
echo $date->format("l, d F Y");

/* Cela affichera "Monday, 25 December 2022", 
qui est la date donnée formatée selon le format spécifié "l, d F Y" (jour de la semaine, jour, mois en lettres, année).*/
?><br>

<?php

/* Il est possible de manipuler les dates avec les méthodes de la classe comme add, sub pour ajouter ou soustraire des jours, 
mois, années etc...*/

$date = new DateTime();
$date->add(new DateInterval("P1D"));
echo $date->format("Y-m-d");

/* Cela affichera "2022-01-19" soit la date d'aujourd'hui + 1 jour */

/* Il existe d'autres méthodes comme diff pour calculer la différence entre deux dates, setDate, setTime, 
setTimestamp pour changer la date ou l'heure, etc.*/
?>







</body>
</html>