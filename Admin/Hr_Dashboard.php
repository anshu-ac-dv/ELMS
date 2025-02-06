<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <?php
        include "Hr_Header.php";
    ?>

    <div class="dashboard">
        <div class="card" onclick="location.href='Add_Employee.php'">
            <h2>Add Employee</h2>
            <p>Register a new employee.</p>
        </div>
        <div class="card" onclick="alert('Leave Request clicked!')">
            <h2>Leave Request</h2>
            <p>Manage employee leave requests.</p>
        </div>
        <div class="card" onclick="alert('Remove Employee clicked!')">
            <h2>Remove Employee</h2>
            <p>Terminate an employee.</p>
        </div>
        <div class="card" onclick="alert('History clicked!')">
            <h2>History</h2>
            <p>View employee leave history.</p>
        </div>
    </div>
    
</body>
</html>