<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>children()</title>
</head>
<body>
    <h1>children()</h1>
    <h2>Description</h2>
    <p>En PHP, la méthode children() est utilisée pour obtenir les éléments enfants d'un élément DOM (Document Object Model) dans un document HTML ou XML. <br> 
        Elle est généralement utilisée en conjonction avec des bibliothèques de manipulation de DOM telles que DOMDocument ou SimpleXML. <br> La méthode children() retourne un objet de type DOMNodeList qui contient tous les nœuds enfants de l'élément ciblé. <br> 
        Les nœuds enfants sont des éléments tels que les balises HTML, les commentaires et les nœuds de texte.</p>
    <h2>Exemple</h2>
<?php
/* Voici un exemple d'utilisation de la méthode children() avec DOMDocument : */

$html = '<div><p>Hello World</p><p>Welcome to PHP</p></div>';
$doc = new DOMDocument();
$doc->loadHTML($html);
$div = $doc->getElementsByTagName('div')->item(0);
$children = $div->childNodes;
foreach ($children as $child) {
    echo $child->nodeValue . "<br>";
}
?><br>

<!-- Cet exemple affichera:

Hello World
Welcome to PHP

-->






</body>
</html>