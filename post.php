<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post()</title>
</head>
<body>
    <h1>post()</h1>
    <h2>Description</h2>
    <p>La méthode HTTP "POST" est utilisée pour envoyer des données à un serveur Web à des fins de mise à jour ou de création. 
        Les données envoyées par la méthode POST sont généralement cachées dans le corps de la requête HTTP et ne sont pas visibles dans l'URL.</p>
    <h2>Exemple</h2>

// Voici un exemple de soumission de formulaire utilisant la méthode POST en PHP :

<form method="post" action="post.php">
<label for="name">Name:</label>
<input type="text" id="name" name="name"><br><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email"><br><br>
<input type="submit" value="Submit">
</form>

<br>


<?php
// Et voici comment le script PHP "submit.php" récupère les données envoyées via la méthode POST :
if(isset($_POST["name"])) {
$name = $_POST["name"];
$email = $_POST["email"];
echo "Name: " . $name . "<br>";
echo "Email: " . $email;
}


/* Ici, les données saisies dans le formulaire sont récupérées à l'aide de la superglobale $_POST, 
qui contient un tableau associatif des données envoyées via la méthode POST. 
Les clés du tableau sont les noms des champs de formulaire, et les valeurs sont les données saisies.

Il est important de noter que les données envoyées par la méthode POST ne sont pas visibles dans l'URL, 
elles sont envoyées de manière cachée dans le corps de la requête HTTP. 
Il est donc plus sécurisé d'utiliser la méthode POST pour envoyer des informations sensibles, comme des mots de passe ou des informations de carte de crédit. */
?><br>









</body>
</html>