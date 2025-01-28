<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'Connection.php';
        $emp_id = $_POST["emp_id"];
        $password = $_POST["password"];
        $sql = SELECT * FROM hr where username=$emp_id AND password=$password;
        $result = mysqli_query($conn, $sql);
        if ($result) {
            session_start();
            $_SESSION['emp_id'] == 'emp_id';
            header ("location: Hr_Dashboard.php");
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
        <input type="email" name="emp_id" placeholder="HR ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        </form>
        <p>Forgot your password? <a href="#">Click here</a></p>
    </div>
</body>
</html>