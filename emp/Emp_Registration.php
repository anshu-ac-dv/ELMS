<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register_Style.css">
    <title>Employee Registration</title>
</head>
<body>
<div class="form-container">
        <h2>Employee Registration</h2>
        
        <form action="#" method="post">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <!-- Department -->
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option value="" disabled selected>Select Department</option>
                    <option value="HR">Sales Manager</option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                </select>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>

            <h4>If you are old employee then <a href="Emp_Login.php">Login</a> here.</h4>
            <!-- Submit Button -->
            <button type="submit" class="btn-submit">Register</button>
            
        </form>
    </div>
</body>
</html>