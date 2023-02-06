<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fclose()</title>
</head>
<body>
    <h1>fclose()</h1>
    <h2>Description</h2>
    <p>La fonction fclose en PHP permet de fermer un fichier qui a été ouvert avec la fonction fopen. 
        Il est important de fermer un fichier après utilisation pour libérer les ressources système 
        et éviter les erreurs de fichier ouvert.</p>
    <h2>Exemple</h2>
<?php
/* Voici un exemple d'utilisation de fclose pour fermer un fichier qui a été ouvert en mode lecture : */

$file = fopen("file.txt", "r");
// Code pour lire et traiter le fichier
fclose($file);

?><br>

    <p>Il est important de noter que lorsque vous ouvrez un fichier avec la fonction fopen, vous devez également le fermer avec fclose pour libérer les ressources système. 
        Si vous oubliez de fermer un fichier, cela peut causer des erreurs de fichier ouvert ou des problèmes de performance. 
        Il est aussi possible d'utiliser la fonction fclose sur un pointeur de fichier qui est déjà fermé, cela retourne false.</p>

<?php
/* Il est aussi possible d'utiliser une instruction fclose dans un bloc finally ou 
dans un gestionnaire try-catch pour garantir la fermeture de fichier même en cas d'erreur. */

try {
    $file = fopen("file.txt", "r");
    // Code pour lire et traiter le fichier
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    fclose($file);
}

/* Cela garantit que le fichier sera fermé même si une exception est levée lors de la lecture et du traitement du fichier. */

?>





</body>
</html>