<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fopen()</title>
</head>
<body>
    <h1>fopen()</h1>
    <h2>Description</h2>
    <p>La fonction "fopen()" en PHP permet d'ouvrir un fichier sur le serveur et de retourner un pointeur de fichier qui 
        peut être utilisé pour lire ou écrire dans le fichier. 
        La fonction prend deux paramètres : le nom du fichier à ouvrir, et le mode d'ouverture.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de "fopen()" pour ouvrir un fichier en mode lecture :

$monfichier = fopen('monfichier.txt', 'r');
var_dump($monfichier);
/* Dans cet exemple, la variable "$monfichier" contiendra un pointeur de fichier pour 
le fichier "monfichier.txt" ouvert en mode "r" (lecture). */
?><br>

    <p>Voici un exemple d'utilisation de "fopen()" pour ouvrir un fichier en mode écriture :</p>

<?php

$monfichier = fopen('monfichier.txt', 'w');

/* Dans cet exemple, la variable "$monfichier" contiendra un pointeur de 
fichier pour le fichier "monfichier.txt" ouvert en mode "w" (écriture). 
Notez que si le fichier n'existe pas, il sera créé, s'il existe déjà, son contenu sera effacé */
?><br>

<?php
fclose($monfichier);


?><br>


    <p>Il est important de vérifier si l'ouverture de fichier a été réussi ou pas, pour éviter les erreurs, voici un exemple :</p>

<?php
$monfichier = fopen('monfichier.txt', 'r');
if ($monfichier) {
    // le fichier a été ouvert avec succès
    // code pour travailler avec le fichier
    fclose($monfichier);
} else {
    // il y a eu une erreur lors de l'ouverture du fichier
    // code pour gérer l'erreur
}


?>





</body>
</html>