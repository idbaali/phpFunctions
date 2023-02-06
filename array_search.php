<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_search()</title>
</head>
<body>
    <h1>array_search()</h1>
    <h2>Description</h2>
    <p>La fonction array_search() en PHP permet de rechercher une valeur dans un tableau et de renvoyer l'index de la première occurrence de cette valeur. Si la valeur n'est pas trouvée, la fonction renvoie FALSE.</p>
    <h2>Exemple</h2>
<?php
$fruits = array("orange", "banana", "apple", "raspberry");
$search_value = "apple";
$search_result = array_search($search_value, $fruits);
echo $search_result;

/* Cela affichera "2" car "apple" est la troisième valeur du tableau $fruits et les tableau commencent à l'index 0.*/
?><br>







</body>
</html>