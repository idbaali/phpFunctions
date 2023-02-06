<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_unset()</title>
</head>
<body>
    <h1>session_unset()</h1>
    <h2>Description</h2>
    <p>La fonction session_unset() en PHP est utilisée pour supprimer toutes les variables de session enregistrées. 
        Elle vide l'ensemble des variables de session, mais ne détruit pas la session elle-même.</p>
    <h2>Exemple</h2>
<?php
// Voici un exemple d'utilisation de session_unset() pour supprimer toutes les variables de session enregistrées :

session_start();
$_SESSION["name"] = "John Doe";
$_SESSION["age"] = 25;
session_unset();
print_r($_SESSION);

/* Dans cet exemple, nous avons démarré une session, enregistré deux variables de session "name" et "age" et 
ensuite nous avons utilisé session_unset() pour supprimer toutes les variables de session enregistrées. 
Enfin, nous avons affiché le contenu de la variable superglobale $_SESSION qui est vide après l'appel de session_unset()*/
?><br>

<?php
/* Il est important de noter que session_unset() ne détruit pas la session elle-même. 
Il est donc encore possible de réutiliser la session en enregistrant de nouvelles variables de session. 
Si vous voulez détruire la session en cours, vous pouvez utiliser la fonction session_destroy() qui supprime toutes les variables de session enregistrées et 
détruit la session elle-même. */

session_start();
$_SESSION["name"] = "John Doe";
$_SESSION["age"] = 25;
session_unset();
session_destroy();

/* Il est important de noter que la fonction session_unset() ne peut être utilisée qu'après l'appel à session_start(). 
Si vous voulez utiliser cette fonction avant d'avoir démarré la session, il faudra utiliser $_SESSION = array() pour vider les variables de session. */

?>






</body>
</html>