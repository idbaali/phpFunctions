<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get()</title>
</head>
<body>
    <h1>get()</h1>
    <h2>Description</h2>
    <p>"get" est un terme générique en PHP qui peut faire référence à plusieurs choses différentes, selon le contexte. Il peut faire référence à :</p>
    <h2>Exemple</h2>
<?php
/* 1. Les variables $_GET : 
Les variables $_GET sont utilisées pour récupérer les données envoyées en méthode GET dans une requête HTTP. 
Ces variables sont accessibles sous forme de tableau associatif. 
Voici un exemple d'utilisation :*/

if (isset($_GET["name"])) {
    echo "Bonjour " . $_GET["name"];
} else {
    echo "Bonjour, vous n'avez pas entré de nom.";
}

?><br>

<?php
/* 2. La méthode GET d'une requête HTTP : La méthode GET est utilisée pour récupérer des informations auprès d'un serveur. 
Les données sont généralement transmises dans l'URL de la requête. Pour utiliser cette méthode en PHP, 
il faut utiliser une bibliothèque telle que cURL ou file_get_contents().*/

$url = "https://www.example.com/api?param1=value1&param2=value2";
$data = file_get_contents($url);
echo $data;

?><br>

<?php
/* 3. La méthode get d'un objet : Certaines classes en PHP ont une méthode get qui permet d'accéder à un propriété privée en lecture seule. Par exemple :*/

class Person {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
$person = new Person("John");
echo $person->getName(); // "John"

// Il est donc important de préciser dans quel contexte vous utilisez le terme "get" pour pouvoir vous donner une réponse précise.
?>







</body>
</html>