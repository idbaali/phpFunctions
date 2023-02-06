<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagedestroy()</title>
</head>
<body>
    <h1>imagedestroy()</h1>
    <h2>Description</h2>
    <p>imagedestroy() est une fonction en PHP qui permet de détruire une image GD créée avec l'une des fonctions GD telles que imagecreate() ou imagecreatefrom*. 
        Elle prend en entrée le pointeur vers l'image GD à détruire.</p>
    <h2>Exemple</h2>
<?php
$image = imagecreatefrompng("image.png");
// opérations sur l'image
imagedestroy($image);

/* Dans cet exemple, nous utilisons imagecreatefrompng() pour charger une image PNG depuis un fichier. 
Ensuite, nous effectuons des opérations sur l'image (par exemple, une modification, un dessin, etc.). 
Enfin, nous utilisons imagedestroy() pour détruire l'image GD. 
Cela libère de la mémoire et permet d'éviter des fuites de mémoire.

Il est important de noter que si vous ne détruisez pas les images GD en utilisant imagedestroy() lorsque vous n'en avez plus besoin, 
cela peut entraîner des fuites de mémoire et ralentir votre application. Il est donc conseillé de détruire les images GD dès que vous n'en avez plus besoin. */
?><br>







</body>
</html>