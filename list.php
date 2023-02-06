<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list()</title>
</head>
<body>
    <h1>list()</h1>
    <h2>Description</h2>
    <p>list() est une instruction en PHP qui permet de mettre des variables en correspondance avec les éléments d'un tableau ou d'un objet itérable. 
        Elle prend en entrée un tableau ou un objet itérable, et une liste de variables séparées par des virgules qui seront mises en correspondance avec les éléments du tableau ou de l'objet itérable.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de list() avec un tableau :

$info = array("John", 30, "New York");
list($name, $age, $city) = $info;
echo "Name: $name, Age: $age, City: $city"; // Name: John, Age: 30, City: New York

/* Dans cet exemple, nous définissons un tableau qui contient les informations sur une personne. 
Ensuite, nous utilisons list() pour mettre en correspondance les variables $name, $age et $city avec les éléments du tableau. 
Nous pouvons ensuite utiliser ces variables pour accéder aux informations de la personne. */
?><br>

<?php
// Voici un exemple d'utilisation de list() avec un objet itérable :

$info = new ArrayObject(array("name" => "John", "age" => 30, "city" => "New York"));
list($name, $age, $city) = $info;
echo "Name: $name, Age: $age, City: $city"; 

/* Dans cet exemple, nous définissons un objet itérable qui contient les informations sur une personne. 
Ensuite, nous utilisons list() pour mettre en correspondance les variables $name, $age et $city avec les éléments de l'objet itérable. 
Nous pouvons ensuite utiliser ces variables pour accéder aux informations de la personne.

Il est important de noter que le nombre de variables doit correspondre au nombre d'éléments du tableau ou de l'objet itérable, sinon cela entraîne une erreur. */

?>







</body>
</html>