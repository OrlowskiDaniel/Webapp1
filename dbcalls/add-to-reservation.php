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

echo '<br>this is my product: ',$name, ' <<<< <br>';
echo '<br>this is my product: ',$mail, ' <<<< <br>';
echo '<br>this is my product: ',$number, ' <<<< <br>';
echo '<br>this is my product: ',$person, ' <<<< <br>';
echo '<br>this is my product: ',$date, ' <<<< <br>';
echo '<br>this is my product: ',$hour, ' <<<< <br>';
echo '<br>this is my product: ',$comment, ' <<<< <br>';



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

