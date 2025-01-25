<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>COntact - Employee Leave Management System</title>
</head>
<body>

    <?php
        include 'Header.php';
    ?>

    <main class="contact-container">
        <h1>Contact Us</h1>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>

            <button type="submit">Send Message</button>
        </form>

        <div class="contact-info">
            <h3>Our Office</h3>
            <p>BITM Boys Hostel kamarpara</p>
            <p>Kolkata, India - 731236</p>
            <p>Email: anshu.ac.dv.com</p>
            <p>Phone: +918710080479</p>
        </div>
    </main>
</body>
</html>