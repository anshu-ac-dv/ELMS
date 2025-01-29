<?php

    include 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM hr_login where username='$username' AND password='$password'";
        $result = mysqli_query($con,$sql);
        if ($result) {
            session_start();
            $_SESSION['username'];
            header ("location: Admin/Hr_Dashboard.php");
        }
        else {
            echo("Error");
        }
    }

?>

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
        <form action="HR_Login.php" method="POST">
        <input type="email" name="username" placeholder="HR ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        </form>
        <p>Forgot your password? <a href="#">Click here</a></p>
    </div>
</body>
</html>