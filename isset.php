<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>
<body>
    <h1>isset()</h1>
    <h2>Description</h2>
    <p>isset() est une fonction en PHP qui permet de vérifier si une variable est définie et possède une valeur différente de NULL. 
        Elle prend en entrée une ou plusieurs variables et renvoie TRUE si toutes les variables passées en entrée sont définies et ont une valeur différente de NULL, 
        et FALSE sinon.</p>
    <h2>Exemple</h2>
<?php
$a = "hello";
$b = null;
cleansession

/*Dans cet exemple, nous définissons la variable $a avec la valeur "hello" et la variable $b avec la valeur null. 
Ensuite, nous utilisons isset() pour vérifier si les variables sont définies et ont une valeur différente de NULL. 
La première condition de if est vérifiée car la variable $a est définie et possède une valeur différente de NULL. 
La seconde condition de if n'est pas vérifiée car la variable $b n'est pas définie ou possède une valeur égale à NULL.

Il est important de noter que isset() ne peut pas être utilisé pour vérifier si une clé ou un élément d'un tableau ou d'un objet est défini. 
Pour cela, il faut utiliser les opérateurs de tableau ou d'objet array_key_exists() ou property_exists(). */
?><br>







</body>
</html>