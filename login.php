<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="login">
        <div class="login-box">
        <a href="index.php" class="back-button">Back</a>
            <h1>Login</h1>
            <form method="post" action="./dbcalls/checklogin.php" class="login-form">
                <input type="text" name="username" class="login-form-input">
                <div class="form-line"></div>
                <input type="text" name="password" class="login-form-input">
                <div class="form-line"></div>
                <input type="submit" value="Login" class="login-form-submit">
            </form>
        </div>
        
    </section>
</body>
</html>