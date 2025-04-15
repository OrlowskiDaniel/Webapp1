<?php

include("./conn.php");

$product = $_POST['dish'];
echo '<br>this is my product: ',$product, ' <<<< <br>';
$price = $_POST['price'];
echo 'this is my price: ',$price, ' <<<<';
$description = $_POST['description'];
echo 'this is my price: ',$description, ' <<<<';
// $img = $_POST['img'];
// echo 'this is my price: ',$img, ' <<<<';

$sql = 'INSERT INTO menuitems(Productname, Price, Productdescription) VALUES (:product, :price, :description);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":description", $description);
// $stmt->bindParam(":img", $img);
$stmt->execute();

header('Location: ../order.php');

