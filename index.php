<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Employee Leave Management System</title>
</head>
<body>

    <?php
        include 'Header.php';
    ?>

    <main class="main-container">
        <h1>Welcome to the Employee Leave Management System</h1>
        <p>Streamline your leave requests and approvals with ease.</p>

        <div class="card-container">
            <div class="card">
                <h2>Employee Login</h2>
                <p>Access your leave records and apply for leave easily.</p>
                <a href="Employee_Login.php">Login</a>
            </div>
            <div class="card">
                <h2>HR Login</h2>
                <p>Manage employee leave requests and generate reports.</p>
                <a href="HR_Login.php">Login</a>
            </div>
        </div>
        <section class="info-section">
            <h3>Why Choose Our System?</h3>
            <p>
                Our Employee Leave Management System simplifies leave tracking, improves communication between employees and HR, and ensures a smooth workflow. 
                It is designed to save time and increase efficiency for your organization.
            </p>
        </section>
  </main>
</body>
</html>