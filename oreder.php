<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <?php include('includes/header.php') ?>
    <div class="order">
        <div class="menu-wrapper">
            <div class="menunav">
                <form action="">
                    <input class="search-bar" type="text" placeholder="Search.." name="search">
                    <button type="sumbit"></button>
                </form>
            </div>
            <div class="category-wrapper" >
                <img class="arrow" src="./assets/img/arrow_left.svg" alt="arrow">
                <div class="category-menu">
                    <a href="#Starter">Starter</a>
                    <a href="#Soup">Soup</a>
                    <a href="#Salad">Salad</a>
                    <a href="#Main">Main</a>
                    <a href="#Dessert">Dessert</a>
                    <a href="#Drinks">Drinks</a>
                </div>
                <img class="arrow" src="./assets/img/arrow_right.svg" alt="arrow">
            </div>

            <div class="menu">
                
                <?php
                include('./dbcalls/read.php');

                foreach ($result as $key => $value) {

                echo '<div class="box-for-menu-items">';
                echo '<br>' . $value['Productname'];
                echo '<br>€ ' . $value['Price'];
                echo '<br> ' . $value['Productdescription'];
                echo '<img class ="add-button" src="./assets/img/Frame.svg"/>';
                echo '</div>';

                }
                ?>
            </div>
        </div>
        
        <div class="basket">
            <div class="basket-list-wrapper">
                <div class="basket-titel">Basket</div>
                <div class="text-order-list">Order List</div>
                <div class="order-list">
                    
                    <div class="order-list-item"></div>
                    <div class="order-list-item"></div>
                </div>
                <a href="#checkout" class="check-out-button">CHECK OUT</a>
            </div>
        </div>
    </div>
</body>
</html>