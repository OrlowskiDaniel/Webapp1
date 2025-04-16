<?php

include("conn.php");

$productnaam = $_POST['productname'];
$prijs = $_POST['price'];
$description = $_POST['description'];
$id = $_POST['ID'];

$sql = 'UPDATE menuitems SET Productname = :productname, Price = :price, Productdescription = :description WHERE ID = :ID';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":productname", $productnaam );
$stmt->bindParam(":price", $prijs );
$stmt->bindParam(":description", $description );
$stmt->bindParam(":ID", $id );
$stmt->execute();


header("location: ../admin-edit.php");