<?php
include("conn.php");

$searchResult = $_GET["searchresult"];

$test = '%' . $searchResult . '%';

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE Productdescription LIKE :productdescription;");
// $stmt->bindParam(":product", $test);
$stmt->bindParam(":productdescription", $test);
$stmt->execute();

$result = $stmt->fetchAll();

var_dump($result);