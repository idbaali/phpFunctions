<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fsize()</title>
</head>
<body>
    <h1>fsize()</h1>
    <h2>Description</h2>
    <p>filesize() est une fonction en PHP qui renvoie la taille d'un fichier en octets. 
        Elle prend en entrée le nom ou le chemin d'accès au fichier. Elle renvoie la taille du fichier, ou FALSE si le fichier n'existe pas ou si une erreur s'est produite.</p>
    <h2>Exemple</h2>
<?php
$size = filesize("file.txt");
if ($size === false) {
    echo "Erreur lors de la récupération de la taille du fichier.";
} else {
    echo "La taille du fichier est de $size octets.";
}

/* Dans cet exemple, nous utilisons filesize() pour récupérer la taille du fichier "file.txt". 
Si une erreur se produit (par exemple si le fichier n'existe pas), filesize() renvoie FALSE, et nous affichons un message d'erreur. 
Sinon, nous affichons la taille du fichier en octets.
Il est important de noter que filesize ne prend en compte que les fichiers qui se trouvent sur le serveur, 
donc si vous voulez récupérer la taille d'un fichier qui se trouve sur un autre serveur, il faudra utiliser d'autres méthodes comme cURL pour récupérer la taille du fichier distant.*/
?><br>







</body>
</html>