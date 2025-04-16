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
    <div class="reservation">
        <h2>Reservations</h2>
        <div class="all-reservations-box">
        <?php 
            // if (isset($_POST['send']))
            include('./dbcalls/read-reservations.php');
                    foreach ($result as $key => $value) {
                        echo '<div class="reservation-box">';
                        echo '<p>Reservation name: ' . $value['name'] . '</p>';
                        echo '<p>Mail: ' . $value['mail'] . '</p>';
                        echo '<p>Telefoon: ' . $value['number'] . '</p>';
                        echo '<p>Persons: ' . $value['person'] . '</p>';
                        echo '<p>Date: ' . $value['date'] . '</p>';
                        echo '<p>Hour:  ' . $value['hour'] . '</p>';
                        echo '<p>Comment: ' . $value['comment'] . '</p>';

                        
                        echo '<form action="./dbcalls/delete-reservation.php" method="post">';
                        echo '<input type="hidden" name="ID" value="' . $value['ID'] .'">';
                        echo '<input type="submit" class="delete-reservation-button" name="" value="Delete"> ';
                        echo '</form>';
              

                        echo '</div>';
                    }
            
        ?>
            
        </div>
    </div>
    </section>
</body>
</html>