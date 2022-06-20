<?php

require_once __DIR__ . '/Class/Product.php';
require_once __DIR__ . '/Class/User.php';
require_once __DIR__ . '/Class/Product_Class/Cibo.php';
require_once __DIR__ . '/Class/Product_Class/Toy.php';
require_once __DIR__ . '/Class/Product_Class/Cuccia.php';
require_once __DIR__ . '/Class/User.php';

$scatoletta = new Cibo('Pedigree',10 ,'pollo e carote');

$pupazzo = new Toy('Trixie', 15 , 'gomma');

$cuccia_grande = new Cuccia('Dreamaway', 129 , '100x150x45');

$ugo = new User('Ugo', 'De Ughi' ,  "22-06-21" , false,);

echo '<pre>';
var_dump($scatoletta);
echo '</pre>';

echo '<pre>';
var_dump($pupazzo);
echo '</pre>';

echo '<pre>';
var_dump($cuccia_grande);
echo '</pre>';

echo '<pre>';
var_dump($ugo);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>