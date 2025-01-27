<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style2.css">
    <title>HR Login - Employee Leave Management System</title>
</head>
<body>

    <?php
        include 'Header.php';
    ?>

    <div class="login-container">
        <h1>HR Login</h1>
        <form action="#" method="POST">
        <input type="text" name="employee-id" placeholder="HR ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        </form>
        <p>Forgot your password? <a href="#">Click here</a></p>
    </div>
</body>
</html>