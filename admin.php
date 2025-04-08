<?php
session_start();
if(isset($_SESSION['username'])) 
{
?>

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
    <section class="admin-add">
        <?php include('./includes/admin-bar.php') ?>
        <div class="add-product-warpper">
            <div class="add-product-form">
                <!--add category field, add description field, add img field -->
                <form class="add-form" action="./dbcalls/create.php" method="post">
                    <label for="">Type here the name of the dish:</label><br>
                    <input type="text" name="dish" id="1">
                    <br>
                    <label for="">Type here the price of the dish:</label><br>
                    <input type="text" name="price"> 
                    <br>
                    <label for="">Type here the price of the dish:</label><br>
                    <input type="text" name="price"> 
                    <br>
                    <label for="">Type here the price of the dish:</label><br>
                    <input type="text" name="price"> 
                    <br>
                    
                    <input class="add-product-button" type="submit">
                </form>
            </div>
            <div class="product-to-add">
                
                
            </div>

        </div>
    </section>
</body>



</html>
<?php
}
else {
    header('Location: ./contact.php');

}
?>