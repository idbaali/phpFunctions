<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fille_put_contents()</title>
</head>
<body>
    <h1>fille_put_contents()</h1>
    <h2>Description</h2>
    <p>La fonction file_put_contents() en PHP permet d'écrire des données dans un fichier. 
        Elle prend en paramètre le nom ou le chemin du fichier, les données à écrire et un flag optionnel 
        pour spécifier le mode d'ouverture du fichier.</p>
    <h2>Exemple</h2>
<?php
/* Voici un exemple d'utilisation de la fonction file_put_contents() pour écrire des données dans un fichier : */

$data = "Hello World!";
$file = "file.txt";

file_put_contents($file, $data);


var_dump($file);


?><br>

    <p>Dans cet exemple, on déclare une variable $data contenant la chaîne "Hello World!" 
        puis on déclare une variable $file qui contient le nom du fichier où on veut écrire les données. 
        Enfin, on utilise la fonction file_put_contents() pour écrire les données dans le fichier en passant le nom du fichier 
        et les données à écrire en paramètre. Cette fonction va écraser tout le contenu du fichier s'il existe déjà.</p>

<?php
/* Il est possible d'utiliser un flag optionnel en troisième paramètre pour spécifier le mode d'ouverture du fichier. 
    Il y a deux flags disponibles :

    FILE_APPEND : permet d'ajouter les données à la fin du fichier existant sans écraser le contenu existant.
    LOCK_EX : permet d'éviter les conflits d'écriture simultanée sur le fichier.*/

$data = "Hello World!";
$file = "file.txt";

file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

var_dump($file);

// Cela permet d'ajouter les données à la fin du fichier


?>







</body>
</html>