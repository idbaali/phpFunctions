<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array()</title>
</head>
<body>
    <h1>shuffle()</h1>
    <h2>Description</h2>
    <p>La fonction shuffle() en PHP est utilisée pour mélanger aléatoirement les éléments d'un tableau. 
        Elle prend en paramètre un tableau et modifie l'ordre des éléments de celui-ci de manière aléatoire. 
        Cette fonction ne retourne pas de valeur, elle modifie directement le tableau passé en paramètre.</p>
    <h2>Exemple</h2>
<?php
$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
print_r($numbers);
?><br>

<?php 
$colors = array("red", "green", "blue", "yellow");
shuffle($colors);
print_r($colors);

?>
<!-- $db = new PDO("mysql:host=hostname;dbname=database_name", "username", "password");
$stmt = $db->query("SELECT column_name FROM table_name");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
shuffle($results);
$concatenated = implode(',', array_column($results, 'column_name'));
echo $concatenated; -->






</body>
</html>