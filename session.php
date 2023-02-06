<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session()</title>
</head>
<body>
    <h1>session()</h1>
    <h2>Description</h2>
    <p>Les sessions en PHP permettent de conserver des informations entre les requêtes d'un utilisateur spécifique. 
        Les variables de session sont stockées sur le serveur et sont associées à un identifiant de session unique, 
        qui est généralement stocké dans un cookie sur l'ordinateur de l'utilisateur.
        Pour utiliser les sessions en PHP, vous devez d'abord démarrer une session en appelant la fonction session_start().
        Cela génère un identifiant de session unique et initialise un tableau associatif des variables de session pour cette session.</p>
    <h2>Exemple</h2>
<?php
// Starting a session
session_start();

// Setting a session variable
$_SESSION["name"] = "John Doe";

// Getting a session variable
echo "Name: " . $_SESSION["name"];

/* Dans cet exemple, nous avons démarré une session en appelant session_start(), enregistré une variable de session "name" avec la valeur "John Doe" et ensuite nous avons récupéré la valeur de cette variable de session en utilisant la superglobale $_SESSION.

Il est important de noter que la fonction session_start() doit être appelée avant toute sortie HTML, sinon, cela peut causer des erreurs. 
Il est également important de noter que les variables de session sont stockées sur le serveur, 
donc vous ne pouvez pas accéder aux variables de session sur une autre page ou sur un autre site Web sans les transmettre explicitement. */
?><br>

<?php
/* Il est également possible de détruire une session en cours en utilisant la fonction session_destroy() qui supprime toutes les variables de session enregistrées et détruit la session elle-même. */
session_start();

$_SESSION["name"] = "John Doe";
session_destroy();

/* Il est important de noter que la fonction session_destroy() ne peut être utilisée qu'après l'appel à session_start(). */
?>







</body>
</html>