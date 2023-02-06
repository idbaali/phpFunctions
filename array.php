<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array()</title>
</head>
<body>
    <h1>array()</h1>
    <h2>Description</h2>
    <p>Les tableaux en PHP sont des structures de données qui permettent de stocker plusieurs valeurs sous une même clé. Il existe plusieurs types de tableaux en PHP, mais les tableaux à deux dimensions (ou tableaux à array) sont particulièrement utiles pour stocker des informations structurées, comme des enregistrements d'une base de données ou des données de formulaire.</p>
    <h2>Exemple</h2>
<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?><br>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?><br>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old.";
?><br>

<?php
/*Un tableau à deux dimensions est créé en utilisant la fonction array(). 
Chacun des éléments du tableau est un tableau lui-même, qui peut contenir des valeurs de différents types. 
Par exemple, voici comment créer un tableau à deux dimensions contenant des informations de contact : */
$contacts = array(
    array("John", "Doe", "john@example.com"),
    array("Jane", "Doe", "jane@example.com"),
    array("Bob", "Smith", "bob@example.com")
/*Vous pouvez accéder à un élément spécifique d'un tableau à deux dimensions en utilisant des crochets []. 
Par exemple, pour accéder au nom de famille de la première personne de la liste des contacts : */
// echo $contacts[0][1];

);
// Les tableaux à deux dimensions peuvent également être utilisées pour itérer à travers les données en utilisant les boucles "foreach"
foreach ($contacts as $contact) {
    echo $contact[0] . " " . $contact[1] . "<br>";
}
var_dump($contacts);
?><br>








</body>
</html>