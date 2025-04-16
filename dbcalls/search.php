<?php
include("conn.php");

if (isset($_GET['search']) && !empty($_GET['searchresult'])) {
    $searchResult = $_GET["searchresult"];
    $search = '%' . $searchResult . '%';

    $stmt = $conn->prepare("SELECT * FROM menuitems WHERE Productname LIKE :search OR Productdescription LIKE :search");
    $stmt->bindParam(":search", $search);
    $stmt->execute();
    $result = $stmt->fetchAll();
} else {  
    include('read.php'); // this sets $result with all products
}