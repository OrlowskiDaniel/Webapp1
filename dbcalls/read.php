<h1>read</h1>

<?php
include('./dbcalls/conn.php');

$stmt = $conn->prepare("SELECT ID, Productname, Price, Productdescription FROM menuitems");
$stmt->execute();
$result = $stmt->fetchAll();

?>



