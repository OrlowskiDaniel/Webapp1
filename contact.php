<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <form name="contact" action="contact.php" method="post">
        <p>Name:* <input type="text" name="name" required></p>
        <p>G-mail:* <input type="text" name="mail" required></p>
        <p>Telephone number:* <input type="text" name="number" required></p>
        <p>Comment: <input type="text" name="comment"></p>
        <p><input type="submit" name="send"><input type="reset"></p>
    </form>
    <?php 
        if (isset($_POST['send']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $number = $_POST['number'];
            $comment = $_POST['comment'];
            echo "Your input:<br>Name: ", $name,"<br>Mail: ", $mail,"<br>Number: ", $number,"<br>Comment: ", $comment;
        }
    ?>
    <?php include('includes/footer.php') ?>
</body>
</html>

