<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serve_request_uri()</title>
</head>
<body>
    <h1>serve_request_uri()</h1>
    <h2>Description</h2>
    <p>La variable $_SERVER['REQUEST_URI'] en PHP est une entrée de tableau superglobal qui contient l'URI (Uniform Resource Identifier) de la requête actuelle. 
        Cela inclut tout ce qui est présent dans l'URL après le nom de domaine, y compris les paramètres de requête éventuels.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de $_SERVER['REQUEST_URI'] pour afficher l'URI de la requête actuelle :

echo $_SERVER['REQUEST_URI'];

// Par exemple, si l'utilisateur accède à l'URL "https://example.com/page?id=5", la valeur de $_SERVER['REQUEST_URI'] sera "/page?id=5".

?><br>

<?php
/* Il est possible d'utiliser cette variable pour analyser les paramètres de requête dans l'URI et de les utiliser pour générer une réponse appropriée. Par exemple, 
pour analyser les paramètres de requête de l'URL "https://example.com/page?id=5" et les utiliser pour afficher un contenu spécifique : */
  
$uri = $_SERVER['REQUEST_URI'];
parse_str(parse_url($uri, PHP_URL_QUERY), $query);
$id = $query['id'];
echo "The id is " . $id;

/* Il est important de noter que cette variable ne contient pas l'URL complète, elle ne contient que l'URI de la requête, 
donc il n'est pas possible de récupérer le nom de domaine ou le protocole (http ou https) à partir de cette variable. 
Il est également important de noter que cette variable est fournie par le serveur web qui peut en donner une valeur différente selon l'implémentation ou 
la configuration. */
?>





</body>
</html>