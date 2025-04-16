<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>

    <?php

    include('includes/header.php') ?>

    <div class="order">
        <div class="menu-wrapper">
            <div class="menunav">
                <form action="order.php" method="GET">
                    <input class="search-bar" type="text" placeholder="Search.." name="searchresult">
                    <button type="submit" value="search" name="search"></button>
                </form>
                
            </div>
            <div class="category-wrapper">
                <img class="arrow" src="./assets/img/arrow_left.svg" alt="arrow">
                <div class="category-menu">

                    <?php
                    include('dbcalls/ReadCategory.php');
                    foreach ($category as $item) {
                        echo '<a href="#' . $item['CategoryName'] . '">' . $item['CategoryName'] . '</a>';
                    }
                    ?>
                </div>
                <img class="arrow" src="./assets/img/arrow_right.svg" alt="arrow">
            </div>

            <div class="menu">
                
                <?php          
                include('./dbcalls/search.php');

                foreach ($category as $item) {
                    echo '<h1 id="' . $item['CategoryName'] . '"> ' . $item['CategoryName'] . '</h1>';
                    foreach ($result as $key => $value) {
                        if ($item['ID'] == $value['Category_id']) {
                            echo '<div class="box-for-menu-items">';

                            echo '<div class="product-text">';
                            echo '<p>' . $value['Productname'] . '</p>';
                            echo '<p>€ ' . $value['Price'] . '</p>';
                            echo '<p class"product-description hideOnMobile"> ' . $value['Productdescription'] . '</p>';
                            // echo '<a herf="#" onclick="showDescription()">Show description</a>';
                            // echo '<div class="product-description-mobile"><a herf="#" onclick="hideDescription()">Close</a> '. $value['Productdescription'] .' </div>';
                            echo '</div>';

                            echo '<div class="product-image-button">';
                            echo '<img class ="food-img" src="./assets/img/'. $value['img'] .'"/>';

                            echo '<form class="add-form-basket" action="./dbcalls/add-to-besket.php" method="post">';
                            echo '<input type="hidden" name="Productname" value=" '. $value['Productname'] . '"/>';
                            echo '<input type="hidden" name="Price" value=" '. $value['Price'] . '"/>';
                            echo '<input type="image" src="./assets/img/Frame.svg" alt="Submit" width="80" height="80">';
                            echo '</form>';

                            echo '</div>';

                            echo '</div>';
                        }
                    }
                }

                ?>
            </div>
        </div>
            
        <div class="basket">
            <div class="basket-list-wrapper">
                <div class="basket-titel">Basket</div>
                <div class="text-basket-list">Order List</div>
                <div class="basket-list">
                    <?php 
                    $total = 0;
                    include('./dbcalls/read-basket.php');
                    foreach ($result as $key => $value) {
                        echo '<div class="basket-item">';
                        echo '<p> - ' . $value['product'] . '</p>';
                        echo '<form action="./dbcalls/delete-basket.php" method="post" class="delete-basket">';
                        echo '<input type="hidden" name="ID" value="' . $value['id'] .'">';
                        echo '<input type="image" src="./assets/img/cancel.svg" alt="Submit" fill="black" color="black" width="30" height="30">';
                        echo '</form>';
                        echo '<p> € ' . $value['price'] . '</p>';
                        echo '</div>';
                        $total = $total + $value['price'];
                    }
                    ?>
                    

                    <!-- <p><strong>Total:</strong> €<span id="total">0</span></p> -->
                </div>


                <a href="#checkout" class="check-out-button">CHECK OUT</a>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php') ?>
</body>

</html>