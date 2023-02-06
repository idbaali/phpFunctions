<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explode()</title>
</head>
<body>
    <h1>explode()</h1>
    <h2>Description</h2>
    <p>La fonction explode en PHP permet de découper une chaîne de caractères en utilisant un séparateur spécifié, 
        et de stocker chaque morceau dans un tableau.
        Par exemple, pour découper une chaîne de caractères contenant une liste de fruits séparés par des virgules, 
        vous pourriez utiliser la fonction explode comme ceci:</p>
    <h2>Exemple</h2>
<?php
$fruits = "pomme,banane,orange,kiwi";
$fruits_array = explode(",", $fruits);
print_r($fruits_array);

/* Cela créera un tableau $fruits_array contenant les éléments suivants:

Array ( [0] => pomme [1] => banane [2] => orange [3] => kiwi ) */

?><br>

    <p>Il est possible de choisir un autre séparateur que la virgule, comme un espace ou un point-virgule par exemple :</p>

<?php
$chaine = "chaine1;chaine2;chaine3";
$tab = explode(";", $chaine);
print_r($tab);

/*Cela créera un tableau $tab contenant les éléments suivants:

Array ( [0] => chaine1 [1] => chaine2 [2] => chaine3 )

Il est à noter que la fonction explode retourne un tableau contenant les morceaux de la chaîne de caractères. 
Si le séparateur n'est pas présent dans la chaine, explode retournera un tableau contenant la chaine d'origine.*/
?>







</body>
</html>