<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unset()</title>
</head>
<body>
    <h1>unset()</h1>
    <h2>Description</h2>
    <p>unset() est une instruction en PHP qui permet de supprimer une variable ou un élément d'un tableau ou d'un objet. 
        Elle prend en entrée une ou plusieurs variables ou éléments à supprimer.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de unset() pour supprimer une variable :

$a = "hello";
unset($a);
echo $a; // This will generate an error because the variable $a does not exist anymore

/* Dans cet exemple, nous utilisons unset() pour supprimer la variable $a. Après cela, la variable n'existe plus et si on essaye de l'utiliser cela genere une erreur.*/
?><br>


<?php
// Voici un exemple d'utilisation de unset() pour supprimer un élément d'un tableau :

$a = array(1,2,3,4,5);
unset($a[2]);
print_r($a); // Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 )

/* Dans cet exemple, nous utilisons unset() pour supprimer l'élément d'index 2 du tableau $a, après cela l'élement n'existe plus et 
on peut voir que l'index 2 est absent dans le tableau.

Il est important de noter que unset() ne peut pas être utilisé pour supprimer une propriété d'un objet, pour cela il faut utiliser unset() sur 
l'objet entier ou utiliser la notation unset($obj->property). 
Il est également important de noter que unset() ne peut pas être utilisé pour supprimer des éléments d'un tableau qui sont des constantes. */
?>







</body>
</html>