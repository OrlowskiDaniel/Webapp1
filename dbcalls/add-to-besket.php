<?php

include("./conn.php");

$product = $_POST['Productname'];
echo '<br>this is my product: ',$product, ' <<<< <br>';
$price = $_POST['Price'];
echo 'this is my price: ',$price, ' <<<<';


$sql = 'INSERT INTO basket(product, price) VALUES (:product, :price);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":price", $price);
$stmt->execute();

header('Location: ../order.php');