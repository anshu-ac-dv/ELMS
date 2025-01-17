<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Login</title>
</head>
<body>
    <div class="login-container">
            <div class="login-box">
                <h2>Employee Login</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="employee-id">Employee ID</label>
                        <input type="text" id="employee-id" name="employee-id" placeholder="Enter your ID" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="login-button">Login</button>
                    <h4>If you are new employee then <a href="Emp_Registration.php">Register</a> here.</h4>
                </form>
            </div>
        </div>
</body>
</html>