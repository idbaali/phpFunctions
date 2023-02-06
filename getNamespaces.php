<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getNamespaces()</title>
</head>
<body>
    <h1>getNamespaces()</h1>
    <h2>Description</h2>
    <p>getNamespaces() est une méthode de la classe SimpleXMLElement en PHP qui permet de récupérer les espaces de noms déclarés dans un document XML. 
        Cette méthode renvoie un tableau contenant les préfixes d'espace de noms comme clés et les URI d'espace de noms comme valeurs.</p>
    <h2>Exemple</h2>
<?php
$xml = simplexml_load_file("file.xml");
$namespaces = $xml->getNamespaces(true);
foreach ($namespaces as $prefix => $uri) {
    echo "Préfixe d'espace de noms : $prefix\n";
    echo "URI d'espace de noms : $uri\n";
}

/* Dans cet exemple, nous utilisons la fonction simplexml_load_file() pour charger un fichier XML en utilisant la classe SimpleXMLElement. 
Ensuite, nous utilisons la méthode getNamespaces() pour récupérer les espaces de noms déclarés dans le fichier XML. 
Enfin, nous parcourons le tableau des espaces de noms pour afficher les préfixes et les URI.
Il est important de noter que si vous ne passez pas de paramètre à getNamespaces() ou que vous passez false, 
cela ne renvoie que les espaces de noms utilisés dans l'élément courant, qui n'est pas nécessairement le même que l'élément racine. */
?><br>







</body>
</html>