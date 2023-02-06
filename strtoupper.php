<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strtoupper()</title>
</head>
<body>
    <h1>strtoupper()</h1>
    <h2>Description</h2>
    <p>strtoupper() est une fonction en PHP qui permet de convertir tous les caractères d'une chaîne de caractères en majuscule. 
        Elle prend en entrée une chaîne de caractères et renvoie la chaîne de caractères convertie en majuscule.</p>
    <h2>Exemple</h2>
<?php
$str = "Hello World!";
echo strtoupper($str); // "HELLO WORLD!"

/* Dans cet exemple, nous utilisons strtoupper() pour convertir tous les caractères de la chaîne "Hello World!" en majuscule, et 
nous affichons le résultat obtenu "HELLO WORLD!"

Il est important de noter que cette fonction ne prend pas en compte les caractères accentués, il faut utiliser la fonction mb_strtoupper() pour 
prendre en compte ces caractères.

Il est également important de noter que cette fonction ne modifie pas l'original string, elle renvoie une copie de la chaine convertie en majuscule. 
Si vous voulez modifiez l'original string vous pouvez utiliser la notation $str = strtoupper($str); */
?><br>







</body>
</html>