
<?php
include('./dbcalls/conn.php');

$stmt = $conn->prepare("SELECT * FROM basket");
$stmt->execute();
$result = $stmt->fetchAll();

?>
