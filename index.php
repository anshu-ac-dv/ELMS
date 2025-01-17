<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include "Header.php";
    ?>
    <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="https://via.placeholder.com/300x150" alt="Card Image" class="card-image">
            <div class="card-content">
                <h3 class="card-title">Card Title 1</h3>
                <p class="card-text">This is a description for the first card. Add relevant information here.</p>
                <button class="card-button">Learn More</button>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="card">
            <img src="https://via.placeholder.com/300x150" alt="Card Image" class="card-image">
            <div class="card-content">
                <h3 class="card-title">Card Title 2</h3>
                <p class="card-text">This is a description for the second card. Add relevant information here.</p>
                <button class="card-button">Learn More</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>