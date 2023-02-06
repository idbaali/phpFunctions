<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagecreatefrompng()</title>
</head>
<body>
    <h1>imagecreatefrompng()</h1>
    <h2>Description</h2>
    <p>imagecreatefrompng() est une fonction en PHP qui permet de créer une image GD à partir d'un fichier PNG. 
        Elle prend en entrée le nom ou le chemin d'accès au fichier PNG, et renvoie un pointeur vers l'image GD créée. 
        Cette image peut ensuite être utilisée avec d'autres fonctions GD pour effectuer des opérations de dessin, de modification, etc.</p>
    <h2>Exemple</h2>
<?php
$image = imagecreatefrompng("image.png");
$new_image = imagecreatetruecolor(50, 50);
imagecopyresampled($new_image, $image, 0, 0, 0, 0, 50, 50, imagesx($image), imagesy($image));
header("Content-Type: image/png");
imagepng($new_image);
imagedestroy($image);
imagedestroy($new_image);

/*Dans cet exemple, nous utilisons imagecreatefrompng() pour charger une image PNG depuis un fichier, 
puis nous créons une nouvelle image vide avec imagecreatetruecolor() de taille 50x50. 
Ensuite, nous utilisons imagecopyresampled() pour redimensionner l'image en utilisant une méthode de lissage. 
Enfin, nous utilisons header() pour définir le type de contenu de la réponse HTTP comme image/png, et imagepng() pour envoyer l'image au navigateur. 
Enfin, nous utilisons imagedestroy() pour détruire les images GD pour libérer de la mémoire.

Il est important de noter que pour utiliser cette fonction, vous devez avoir activé l'extension GD dans votre configuration PHP.*/
?><br>







</body>
</html>