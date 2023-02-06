<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date_format()</title>
</head>
<body>
    <h1>date_format()</h1>
    <h2>Description</h2>
    <p>La fonction date_format() en PHP permet de formater une date selon un format spécifié. 
        Elle prend en paramètres la date à formater et le format de sortie souhaité.</p>
    <h2>Exemple</h2>
<?php
$date = new DateTime();
echo date_format($date, "Y-m-d H:i:s");

/*Cela affichera une date sous la forme 
"2022-01-18 10:30:00", 
qui est la date actuelle formatée selon le format spécifié 
"Y-m-d H:i:s" (année-mois-jour heure:minute:seconde).*/
?><br>

<?php
// On peut aussi utiliser la fonction date() qui est plus simple à utiliser, ci dessous un exemple 

echo date("Y-m-d H:i:s");

/* Cela affichera la même chose que l'exemple précédent.

2023-01-20 12:06:32

Il existe un grand nombre de codes de formatage possibles, voici quelques exemples :

d : jour du mois (01 à 31)
m : mois (01 à 12)
Y : année sur 4 chiffres
H : heure (00 à 23)
i : minutes (00 à 59)
s : secondes (00 à 59)
Il est possible de combiner ces codes de formatage pour créer un format de date personnalisé.*/
?>







</body>
</html>