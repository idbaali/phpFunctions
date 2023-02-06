<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo()</title>
</head>
<body>
    <h1>echo()</h1>
    <h2>Description</h2>
    <p>Echo est une instruction en PHP qui permet d'afficher du contenu à l'écran. 
        Elle peut prendre un ou plusieurs arguments séparés par une virgule, qui seront affichés à la suite les uns des autres. 
        Par exemple, pour afficher "Bonjour, monde!" vous pourriez utiliser la commande suivante :</p>
    <h2>Exemple</h2>
<?php
echo "Bonjour, monde!";

?><br>

<?php
/* Vous pouvez également utiliser echo pour afficher des variables, comme ceci :*/

$nom = "John Doe";
echo "Bonjour, $nom!";
// Cela affichera "Bonjour, John Doe!".

/* Est équivalent à
echo "Bonjour, ", $nom, "!"; */


?>







</body>
</html>