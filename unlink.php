<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlink()</title>
</head>
<body>
    <h1>unlink()</h1>
    <h2>Description</h2>
    <p>unlink() est une fonction en PHP qui permet de supprimer un fichier du système de fichiers. 
        Elle prend en entrée le nom ou le chemin d'accès au fichier à supprimer, et renvoie TRUE si la suppression a réussi, et FALSE sinon.</p>
    <h2>Exemple</h2>
<?php
$file = "file.txt";
if (file_exists($file)) {
    unlink($file);
    echo "Le fichier $file a été supprimé.";
} else {
    echo "Le fichier $file n'existe pas.";
}


/* Dans cet exemple, nous utilisons file_exists() pour vérifier si un fichier nommé "file.txt" existe. Si le fichier existe, nous utilisons unlink() pour 
le supprimer, et nous affichons un message de confirmation de la suppression. Sinon, nous affichons un message indiquant que le fichier n'existe pas.

Il est important de noter que unlink() ne peut pas être utilisé pour supprimer un répertoire, pour cela il faut utiliser rmdir() ou 
la fonction plus avancée recursiveRemoveDirectory(). Il est également important de noter que unlink() ne peut pas être utilisé pour supprimer un fichier qui est actuellement ouvert par un autre processus ou une autre instance de PHP. 
Il est donc recommandé de vérifier si un fichier est ouvert avant de l'utiliser unlink() sur celui-ci. */
?><br>







</body>
</html>