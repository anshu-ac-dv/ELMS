<?php

    if (isset($_POST['submit'])) {
        include 'Connection.php';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $position = $_POST["position"];
        $department = $_POST["department"];

        $sql = "INSERT INTO `employee_details` (`Name`, `Email`, `Position`, `Department`) VALUES ('$name', '$email', '$position', '$department')";
        $result = mysqli_query($con,$sql);

        if ($result) {
            echo "Registration Successful !";
            $con->close();
        } else {
            echo "Something Error Please Chcek You Document And Try Again";
        }
        
        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-top: 50px;
            margin-left: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            margin: 20px
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php
        include "Hr_Header.php";
    ?>

    <div class="container">
        <h2>Add Employee</h2>
        <form action="Add_Employee.php" method="post">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="position">Position</label>
            <input type="text" id="position" name="position" required>

            <label for="department">Department</label>
            <select id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Marketing">Marketing</option>
            </select>
            
            <button type="submit" name="submit">Add Employee</button>
        </form>

        <?php
                
            ?>
    </div>

    
</body>
</html>