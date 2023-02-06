<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simplexml_load_file()</title>
</head>
<body>
    <h1>simplexml_load_file()</h1>
    <h2>Description</h2>
    <p>simplexml_load_file() est une fonction en PHP qui permet de charger un fichier XML en utilisant la classe SimpleXMLElement. 
        Elle prend en entrée le nom ou le chemin d'accès au fichier XML, et renvoie un objet SimpleXMLElement qui 
        permet de manipuler le contenu du fichier XML de manière simple et efficace.</p>
    <h2>Exemple</h2>
<?php
$xml = simplexml_load_file("file.xml");
foreach ($xml->book as $book) {
    echo "Titre : " . $book->title . "\n";
    echo "Auteur : " . $book->author . "\n";
    echo "Année : " . $book->year . "\n";
}

/* Dans cet exemple, nous utilisons simplexml_load_file() pour charger un fichier XML contenant des informations sur des livres. 
Ensuite, nous utilisons une boucle foreach pour parcourir les éléments "book" du fichier XML, et nous utilisons des opérateurs de pointeur pour accéder aux 
informations relatives aux titres, auteurs et années de publication.

Il est important de noter que si le fichier XML n'est pas valide ou ne peut pas être lu, simplexml_load_file() renvoie FALSE et génère une erreur de niveau E_WARNING. 
Il est donc recommandé de vérifier le résultat de cette fonction avant de continuer.
 */
?><br>







</body>
</html>