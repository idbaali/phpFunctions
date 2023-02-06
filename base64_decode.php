<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base64_decode()</title>
</head>
<body>
    <h1>base64_decode</h1>
    <h2>Description</h2>
    <p>La fonction base64_decode() en PHP permet de décoder une chaîne de caractères qui a été encodée avec l'algorithme de base64.<br> 
        L'algorithme de base64 convertit les données binaires (comme des images ou des fichiers) 
        en une chaîne de caractères qui peut être facilement envoyée ou stockée en utilisant des protocoles de transmission de données qui ne gèrent pas les données binaires.</p>
    <h2>Exemple</h2>
<?php
/* La fonction base64_decode() prend en entrée une chaîne encodée en base64 et la décode pour retourner les données binaires d'origine. 
    Il prend en paramètre une chaine encodée en base64 et retourne la chaine décodée.*/

$encoded = 'SGVsbG8gV29ybGQ=';
$decoded = base64_decode($encoded);
echo $decoded;

/*Cet exemple affichera Hello World

Il est important de noter que base64_decode() ne vérifie pas si la chaîne encodée est valide, il essaie simplement de décoder la chaîne donnée. 
Si la chaîne donnée n'est pas valide, cela peut causer des erreurs.*/

?><br>







</body>
</html>