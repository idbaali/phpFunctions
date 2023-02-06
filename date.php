<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date()</title>
</head>
<body>
    <h1>date()</h1>
    <h2>Description</h2>
    <p>La fonction date() en PHP permet de formater une date selon un format spécifié. 
        Elle prend en paramètre le format de sortie souhaité et une date optionnelle 
        (si non fournie, la date courante sera utilisée).</p>
    <h2>Exemple</h2>
<?php
echo date("Y-m-d");

/*Cela affichera une date sous la forme "2022-01-18", 
qui est la date actuelle formatée selon le format spécifié "Y-m-d" (année-mois-jour)*/
?><br>

<?php
/*On peut aussi utiliser une date donnée :*/
$date = "2022-12-25";
echo date("l, d F Y", strtotime($date));

/*Cela affichera "Sunday, 25 December 2022", qui est la date donnée formatée selon le format spécifié "l, d F Y" (jour de la semaine, jour, mois en lettres, année).

Il existe un grand nombre de codes de formatage possibles, voici quelques exemples :

d : jour du mois (01 à 31)
m : mois (01 à 12)
Y : année sur 4 chiffres
H : heure (00 à 23)
i : minutes (00 à 59)
s : secondes (00 à 59)
l : jour de la semaine (dimanche à samedi)
F : mois en lettres (janvier à décembre)
Il est possible de combiner ces codes de formatage pour créer un format de date personnalisé.

Notez que strtotime() convertit une date sous forme de chaîne de caractères en un timestamp Unix, 
qui est un entier représentant le nombre de secondes écoulées depuis le 1er janvier 1970.*/

?>








</body>
</html>