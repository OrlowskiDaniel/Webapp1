<h1>create</h1>
<?php

include('./conn.php');

$product = $_POST['dish'];
echo '<br>this is my product: ',$product, ' <<<< <br>';
$price = $_POST['price'];
echo 'this is my price: ',$price, ' <<<<';

$sql = 'INSERT INTO menuitems(Productname, Price) VALUES (:product, :price);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":price", $price);
$stmt->execute();

header('Location: ../order.php');

