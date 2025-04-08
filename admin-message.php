<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('./includes/header.php') ?>
    <section class="admin-add">
    <?php include('./includes/admin-bar.php') ?>
    <div class="message">
        <h2>Messages</h2>
        <div class="all-message-box">
<!--Always add new box save in database -->
        <?php 
            if (isset($_POST['send']))
            {
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $number = $_POST['number'];
                $person = $_POST['person'];
                $date = $_POST['date'];
                $hour = $_POST['hour'];
                $comment = $_POST['comment'];
                echo '<div class="message-box" ><br>Name:  $name<br>Mail:  $mail<br>Number:  $number<br>Person:  $person<br>Date:  $date<br>Hours:  $hour<br>Comment: $comment';
            }
        ?>
            
        </div>
    </div>
    </section>
</body>
</html>