<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_map()</title>
</head>
<body>
    <h1>array_map()</h1>
    <h2>Description</h2>
    <p>La fonction array_map() de PHP permet de parcourir un tableau et d'appliquer une fonction spécifiée à chaque élément de ce tableau. La fonction retourne un nouveau tableau contenant les résultats de ces opérations.</p>
    <h2>Exemple</h2>
<?php
$numbers = array(1, 2, 3, 4, 5);

function square($n) {
    return $n * $n;
}

$squared_numbers = array_map('square', $numbers);
print_r($squared_numbers);

/* Cela affichera :
Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
*/
?><br>

<?php
/* Il est également possible de passer plusieurs tableaux à array_map() et d'utiliser une fonction qui accepte plusieurs arguments. 
Dans ce cas, les éléments correspondants de chaque tableau seront passés à la fonction : */

$a = array(1, 2, 3, 4, 5);
$b = array(6, 7, 8, 9, 10);

function add($x, $y) {
    return $x + $y;
}

$c = array_map('add', $a, $b);
print_r($c);

/* ela affichera :
Array
(
    [0] => 7
    [1] => 9
    [2] => 11
    [3] => 13
    [4] => 15
)
*/
?>

<!-- Notez que lorsque vous utilisez une fonction anonyme ou une méthode de classe en tant que callback, 
il faut passer un tableau comprenant l'objet et le nom de la méthode comme paramètre. -->







</body>
</html>