<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count()</title>
</head>
<body>
    <h1>count()</h1>
    <h2>Description</h2>
    <p>La fonction count() en PHP permet de compter le nombre d'éléments dans un tableau ou dans un objet.</p>
    <h2>Exemple</h2>
<?php
$fruits = array("orange", "banana", "apple", "raspberry");
$number_of_fruits = count($fruits);
echo $number_of_fruits;

// Cela affichera "4" car il y a 4 éléments dans le tableau $fruits.
?><br>

<?php
// On peut utiliser avec les objets qui implémente l'interface Countable

class MyClass implements Countable {
    private $items = array();

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function count() {
        return count($this->items);
    }
}

$my_class = new MyClass();
$my_class->addItem("item 1");
$my_class->addItem("item 2");

$count = count($my_class);
echo $count;
/*var_dump($my_class);*/

// Cela affichera "2" car il y a 2 éléments dans l'objet $my_class.


?>







</body>
</html>