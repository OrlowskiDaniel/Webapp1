<?php

include("./conn.php");

$product = $_POST['dish'];
// echo '<br>this is my product: ',$product, ' <<<< <br>';
$price = $_POST['price'];
// echo 'this is my price: ',$price, ' <<<<';
$description = $_POST['description'];
// echo 'this is my price: ',$description, ' <<<<';
// $img = $_POST['img'];
// echo 'this is my price: ',$img, ' <<<<';


if (
    is_string($product) && !empty($product) &&
    is_numeric($price) && !empty($prijs) &&	
    is_string($description)
)
{
$sql = 'INSERT INTO menuitems(Productname, Price, Productdescription) VALUES (:product, :price, :description);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":description", $description);
// $stmt->bindParam(":img", $img);
$stmt->execute();
header('Location: ../admin.php');
} 
else {
    echo 'Invalid Input!!!!!';
}
