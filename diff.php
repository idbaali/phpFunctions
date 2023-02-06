<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diff()</title>
</head>
<body>
    <h1>diff()</h1>
    <h2>Description</h2>
    <p>La méthode diff() de la classe DateTime en PHP permet de calculer la différence entre deux dates.<br> 
        Elle renvoie un objet de la classe DateInterval qui contient les informations sur la différence entre les deux dates 
        (nombre d'années, de mois, de jours, d'heures, de minutes, de secondes).</p>
    <h2>Exemple</h2>
<?php

$date1 = new DateTime("2022-01-01");
$date2 = new DateTime("2022-12-31");
$interval = $date1->diff($date2);
echo $interval->format("%R%a days");

/* Cela affichera "364 days", qui est la différence entre les deux dates données exprimée en nombre de jours.*/
?><br>


<?php
/* On peut utiliser les codes de formatage suivants pour afficher les différentes parties de la différence :

%y : années
%m : mois
%d : jours
%h : heures
%i : minutes
%s : secondes
*/

// Il est possible de combiner ces codes de formatage pour créer un format d'affichage personnalisé.

/*Il est possible aussi de comparer deux dates avec cette fonction :*/

$date1 = new DateTime("2022-01-01");
$date2 = new DateTime("2022-12-31");

if ($date1 < $date2) {
  echo 'date1 est plus ancienne que date2';
} else if ($date1 > $date2) {
  echo 'date1 est plus récente que date2';
} else {
  echo 'date1 est égale à date2';
}

/* Cela affichera "date1 est plus ancienne que date2"*/
?>




</body>
</html>