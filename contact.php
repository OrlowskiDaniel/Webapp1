<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php include("includes/header.php") ?>
    <section class="contact-titel">
        <h1>CONTACT</h1>
    </section>
    <section class="contact-page">
        <div class="contact-info-page">
            <h3>Openings Hours</h3>
            <div>
                <h4>Restaurant</h4>
                <p>Monday - Sunday 12:00 - 22:00</p>
            </div>
            <div>
                <h4>Reservations</h4>
                <p>Monday - Sunday 12:00 - 20:00</p>
            </div>
            <div>
                <h4>Order processing (deliveries/pick-ups):</h4>
                <p>Saturday, Sunday - closed</p>
                <p>Monday - Friday 12:00 - 20:00</p>
            </div>
            <h3>Company</h3>
            <div>
                <p>Polish Restaurant</p>
                <p>Something 1 street</p>
                <p>Postcode</p>
                <p>Region: Noord Brabant</p>
            </div>
        </div>
        <div class="contact-form">
            <div class="book-contact">
                <h4>Book</h4>
                <p>tel. +31 32 732 24 89</p>
                <p>restaurnt@emailaddres.nl</p>
            </div>
            <form name="contact" action="admin-message.php" method="post">
                <p>First and Last name (required) <br><input type="text" name="name" required></p>
                <p>E-mail addres (required) <br><input type="text" name="mail" required></p>
                <p>Telephone number (required) <br><input type="text" name="number" required></p>
                <p>Number of persons (required) <br><input type="text" name="person" required></p>
                <p>Date (required) <br><input type="text" name="date" required></p>
                <p>Hour (required) <br><input type="text" name="hour" required></p>
                <p>Comment: <br><input type="text" name="comment"></p>
                <p class="contact-form-button"><input type="submit" name="send"></p>
            </form>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
</body>
</html>

