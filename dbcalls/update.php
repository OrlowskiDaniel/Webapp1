<?php

include("conn.php");

$productnaam = $_POST['productname'];
$prijs = $_POST['Price'];

$sql = 'UPDATE menuitems SET Productname = :productname, price = :price;';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":productname", $productnaam );
$stmt->bindParam(":price", $prijs );
$stmt->execute();


header("location: ../admin.php");