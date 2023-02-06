<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json_decode()</title>
</head>
<body>
    <h1>json_decode()</h1>
    <h2>Description</h2>
    <p>json_decode() est une fonction en PHP qui permet de décoder une chaîne JSON en un tableau ou en un objet PHP. 
        Elle prend en entrée une chaîne JSON et un booléen facultatif qui permet de spécifier si le résultat doit être un tableau (TRUE) ou un objet (FALSE). 
        Elle renvoie le tableau ou l'objet créé à partir de la chaîne JSON.</p>
    <h2>Exemple</h2>
<?php
$json = '{"name":"John", "age":30, "city":"New York"}';
$data = json_decode($json, true);
echo $data["name"]; // "John"

/* Dans cet exemple, nous définissons une chaîne JSON qui représente un tableau associatif avec les clés "name", "age" et "city". 
Ensuite, nous utilisons json_decode() pour décoder la chaîne JSON en un tableau PHP. 
Nous pouvons ensuite accéder aux valeurs du tableau en utilisant les clés comme index. */
?><br>


<?php

/* Voici un exemple d'utilisation de json_decode() pour décoder une chaîne JSON en objet : */

$json = '{"name":"John", "age":30, "city":"New York"}';
$data = json_decode($json, false);
echo $data->name; // "John"

/* Dans cet exemple, nous définissons une chaîne JSON qui représente un tableau associatif avec les clés "name", "age" et "city". Ensuite, nous utilisons json_dec */

?>




</body>
</html>