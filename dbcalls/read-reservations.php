
<?php
include('./dbcalls/conn.php');

$stmt = $conn->prepare("SELECT * FROM reservation");
$stmt->execute();
$result = $stmt->fetchAll();

?>



