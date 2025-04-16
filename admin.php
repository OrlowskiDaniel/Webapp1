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
                <h2>Add Product to menu</h2>
                <!--add category field, add description field, add img field -->
                <form class="add-form" action="./dbcalls/create.php" method="post">
                    <label for="">Name of the dish:</label><br>
                    <input type="text" name="dish" id="1">
                    <br>
                    <label for="">Price of the dish:</label><br>
                    <input type="text" name="price"> 
                    <br>
                    <label for="">Description of the dish:</label><br>
                    <input type="text" name="description"> 
                    <!-- <br>
                    <label for="">Img of the dish:</label><br>
                    <input type="text" name="img"> 
                    -->
                    <br> 
                    
                    <input class="add-product-button" type="submit" value="Add Product">
                </form>
            </div>
            <div class="list-of-products">
                <h2>List of products</h2>
                <?php 
                include('./dbcalls/read.php');

                
                    foreach ($result as $key => $value) {
                        
                            echo '<div class="box-for-menu-items admin-add-list-items">';

                            echo '<div class="product-text">';
                            echo '<p>' . $value['Productname'] . '</p>';
                            echo '<p>€ ' . $value['Price'] . '</p>';
                            // echo '<p class"product-description hideOnMobile"> ' . $value['Productdescription'] . '</p>';
                            // echo '<a herf="#" onclick="showDescription()">Show description</a>';
                            // echo '<div class="product-description-mobile"><a herf="#" onclick="hideDescription()">Close</a> '. $value['Productdescription'] .' </div>';
                            echo '</div>';

                            echo '<img class ="food-img" src="./assets/img/'. $value['img'] .'"/>';

                            

                            echo '</div>';
                        
                    }
                
                ?>
            </div>

        </div>
    </section>
</body>
<?php 
}
    else {
        header('Location: ./contact.php');
    
    }
?>

</html>
