<?php

include("./conn.php");

$product = $_POST['dish'];
echo '<br>this is my product: ',$product, ' <<<< <br>';
$price = $_POST['price'];
echo 'this is my price: ',$price, ' <<<<';
$productdescription = $_POST['prdescription'];
echo 'this is my price: ',$prdescription, ' <<<<';
$img = $_POST['img'];
echo 'this is my price: ',$img, ' <<<<';

$sql = 'INSERT INTO menuitems(Productname, Price, Productdescription, img) VALUES (:product, :price, :prdescription, :img);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":productdescription", $productdescription);
$stmt->bindParam(":img", $img);
$stmt->execute();

header('Location: ../order.php');

