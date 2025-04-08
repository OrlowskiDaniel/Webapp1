<?php
include('./dbcalls/conn.php');

$stmt = $conn->prepare("SELECT * FROM category");
$stmt->execute();
$category = $stmt->fetchAll();

?>



