
<?php
include('./conn.php');
session_start();


$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username;");
$stmt->bindParam(":username", $username);
$stmt->execute();
$result = $stmt->fetch();


if ($result && password_verify($password, $result['password'])) {

    $_SESSION['username'] = $result['username'];
    
    header('Location: ../admin.php');
    exit();
}
else {
    header('Location: ../login.php');
    exit();
}



