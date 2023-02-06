<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_column()</title>
</head>
<body>
    <h1>array_column()</h1>
    <h2>Description</h2>
    <p>La fonction array_column() de PHP permet de retourner un tableau contenant les valeurs d'une colonne spécifiée à partir d'un tableau multidimensionnel.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation :
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe'
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith'
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones'
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe'
    )
);

$first_names = array_column($records, 'first_name');
print_r($first_names);

/*Cela l'affichage :
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)
*/
?><br>

<?php
// Il est également possible de spécifier un deuxième paramètre pour utiliser une colonne différente comme clé dans le tableau de sortie :
$id_first_names = array_column($records, 'first_name', 'id');
print_r($id_first_names);

/*Cela l'affichage :
Array
(
    [2135] => John
    [3245] => Sally
    [5342] => Jane
    [5623] => Peter
)
*/








</body>
</html>