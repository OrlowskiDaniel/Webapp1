<h1>create</h1>
<?php

include("./conn.php");

$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$person = $_POST['person'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$comment = $_POST['comment'];


$sql = 'INSERT INTO reservation(name, mail, number, person, date, hour, comment) VALUES (:name, :mail, :number, :person, :date, :hour, :comment);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":mail", $mail);
$stmt->bindParam(":number", $number);
$stmt->bindParam(":person", $person);
$stmt->bindParam(":hour", $hour);
$stmt->bindParam(":date", $date);
$stmt->bindParam(":comment", $comment);
$stmt->execute();

header('Location: ../contact.php');

