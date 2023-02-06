<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fread()</title>
</head>
<body>
    <h1>fread()</h1>
    <h2>Description</h2>
    <p>fread() est une fonction en PHP qui lit un certain nombre d'octets à partir d'un fichier. Elle prend deux arguments: 
        le premier est un pointeur de fichier (obtenu en utilisant fopen()) et le second est le nombre d'octets à lire. 
        Elle renvoie les octets lus sous forme de chaîne.</p>
    <h2>Exemple</h2>
<?php
$fp = fopen("file.txt", "r");
$data = fread($fp, filesize("file.txt"));
fclose($fp);
echo $data;

/* Dans cet exemple, nous ouvrons d'abord un fichier "file.txt" en mode lecture, puis nous utilisons fread() 
pour lire tous les octets du fichier (en utilisant la fonction filesize() pour déterminer la taille du fichier). 
Enfin, nous affichons les données lues à l'écran et fermer le fichier. */
?><br>







</body>
</html>