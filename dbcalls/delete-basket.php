<?php

include("./conn.php");

$id = $_POST['ID'];


$stmt = $conn->prepare("DELETE FROM basket WHERE id=:ID");
$stmt->bindParam(":ID", $id);
$stmt->execute();

header('Location: ../order.php');