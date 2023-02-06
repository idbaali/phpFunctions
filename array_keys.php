<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_keys()</title>
</head>
<body>
    <h1>array_keys()</h1>
    <h2>Description</h2>
    <p>La fonction array_keys() en PHP est utilisée pour retourner un tableau contenant les clés d'un tableau donné. Cela peut être utile pour itérer à travers les éléments d'un tableau en utilisant les clés plutôt que les index numériques.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de array_keys() pour retourner les clés d'un tableau simple
$fruits = array("a" => "orange", "b" => "banana", "c" => "apple");
$keys = array_keys($fruits);
print_r($keys);
//  Array ( [0] => a [1] => b [2] => c ) Cela l'affichage
?><br>

<?php
// Il est possible de spécifier une valeur pour la recherche dans un tableau, pour récupérer uniquement les clés associées à cette valeur:
    $fruits = array( "a" => "orange", "b" => "banana", "c" => "apple", "d" => "banana" );
    $keys = array_keys( $fruits, "banana" );
    print_r( $keys );
//  Array Array ( [0] => b [1] => d ) Cela l'affichage
?><br>

<?php
// Enfin, Il est possible de spécifier un type de données pour les clés, pour récupérer uniquement les clés de ce type:
    $array = array(100 => "a", "100" => "b", "a" => 1);
    $keys = array_keys($array, "a", true);
    print_r($keys);
//  Array Array Array ( [0] => 100 ) Cela l'affichage
?><br>










</body>
</html>