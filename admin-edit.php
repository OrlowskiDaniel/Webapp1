<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-delete</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('./includes/header.php') ?>
    <section class="detele-admin">
        <?php include('./includes/admin-bar.php') ?>
        <div class="menu-items-container">
    
            <?php
                include('./dbcalls/read.php');

                foreach ($result as $key => $value) {

                echo '<div class="box-for-menu-items admin-menu-items">';
                echo '<div class="admin-items"><br>' . $value['Productname'];
                echo '<br>€ ' . $value['Price'];
                echo '<br> ' . $value['Productdescription'];
                echo '</div>';
                ?>
                <!-- add category and description, make the form bigger -->
                <form action="./dbcalls/update.php" method="post" class="update-form">
                    <input type="text" class="update-field" name="productname" id="" value="<?php echo $value['Productname']; ?>">
                    <input type="text" class="update-field" name="price" id="" value="<?php echo $value['Price']; ?>">
                    <input type="text" class="update-field" name="description" id="" value="<?php echo $value['Productdescription']; ?>">
                    <button type="submit" class="edit-button update-button">Update</button>
                </form>
                <?php
                echo '<form action="./dbcalls/delete.php" method="post" class="delete-form">';
                echo '<input type="hidden" name="ID" value="' . $value['ID'] .'">';
                echo '<input type="submit" class="edit-button delete-button" name="" value="Delete" > ';
                echo '</form>';
                echo '</div>';

                }
                ?>

        </div>
    </section>

</body>
</html>
