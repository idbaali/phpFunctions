<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagejpeg()</title>
</head>
<body>
    <h1>imagejpeg()</h1>
    <h2>Description</h2>
    <p>imagejpeg() est une fonction en PHP qui permet de sauvegarder une image GD en format JPEG sur le disque ou de l'envoyer au navigateur. 
        Elle prend en entrée le pointeur vers l'image GD et un nom de fichier ou une ressource de sortie (comme une ressource de type fichier ouverte avec fopen()). 
        Elle prend également un paramètre facultatif de qualité qui permet de spécifier la qualité de l'image (entre 0 et 100) pour une image JPEG.</p>
    <h2>Exemple</h2>
<?php
$image = imagecreatefrompng("image.png");
imagejpeg($image, "image.jpg", 75);
imagedestroy($image);

/* Dans cet exemple, nous utilisons imagecreatefrompng() pour charger une image PNG depuis un fichier. 
Ensuite, nous utilisons imagejpeg() pour sauvegarder l'image en format JPEG sur le disque avec un nom de fichier "image.jpg" et une qualité de 75%. 
Enfin, nous utilisons imagedestroy() pour détruire l'image GD.*/
?><br>


<?php
// Voici un exemple d'utilisation de imagejpeg() pour envoyer une image directement au navigateur :

$image = imagecreatefrompng("image.png");
header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);

/* Dans cet exemple, nous utilisons imagecreatefrompng() pour charger une image PNG depuis un fichier. 
Ensuite, nous utilisons header() pour définir le type de contenu de la réponse HTTP comme image/jpeg, et imagejpeg() pour envoyer l'image au navigateur. 
Enfin, nous utilisons imagedestroy() pour détruire l'image GD.

Il est important de noter que pour utiliser cette fonction, vous devez avoir activé l'extension GD dans votre configuration PHP. */
?>








</body>
</html>