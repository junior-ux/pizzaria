<?php
$conexao= new PDO ('mysql:host=localhost; dbname=pizzaria', "root", "");

$select = $conexao -> prepare("SELECT * FROM pizzas");

$select->execute();

$fetch = $select->fetchAll();

var_dump($fetch);
?>

