<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_EOL()</title>
</head>
<body>
    <h1>PHP_EOL()</h1>
    <h2>Description</h2>
    <p>PHP_EOL est une constante de PHP qui est utilisée pour définir un saut de ligne en fonction de l'environnement dans lequel le script PHP est exécuté. 
        Sur Windows, cela correspond à "\r\n" et sur les systèmes Unix, cela correspond à "\n".</p>
    <h2>Exemple</h2>
<?php
$str = "Hello" . PHP_EOL . "World!";
echo $str;

// Cela affichera "Hello" suivi d'un saut de ligne, puis "World!".

/* Il est également possible de utiliser des caractères de saut de ligne classique comme "\n" ou "\r\n" pour obtenir le même résultat. 
Mais PHP_EOL est plus pratique car il s'adapte automatiquement à l'environnement d'exécution. */
?><br>







</body>
</html>