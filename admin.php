<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php include('./includes/header.php') ?>

    <form action="./dbcalls/create.php" method="post">
        <label for="">Type here the name of the dish:</label><br>
        <input type="text" name="dish" id="1">
        <br>
        <label for="">Type here the price of the dish:</label><br>
        <input type="text" name="price"> 
        <br>
        <input type="submit">
    </form>

</body>



</html>