<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to WcDonalds</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include "navbar.php";
    ?>
    <h1>Welcome to WcDonald's!</h1>
    <p>Our Menu:</p>
    <ul>
      <li>Burger (Php 100)</li>
      <li>Pizza (Php 300)</li>
      <li>Fries (Php 50)</li>
      <li>Salad (Php 75)</li>
    </ul>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="mb-3">
        <label for="foodItem" class="form-label">Select Food Item:</label>
        <select class="form-select" id="foodItem" name="foodItem" required>
          <option value="">Select...</option>
          <option value="burger">Burger (Php 100)</option>
          <option value="pizza">Pizza (Php 300)</option>
          <option value="fries">Fries (Php 50)</option>
          <option value="salad">Salad (Php 75)</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
      </div>
      <button type="submit" class="btn btn-primary">Add to Order</button>
    </form>
    
    <?php
      // Process Order (if form submitted)
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $foodItem = $_POST['foodItem'];
        $quantity = (int)$_POST['quantity'];
        
        // Price List (modify as needed)
        $prices = array(
          "burger" => 100,
          "pizza" => 300,
          "fries" => 50,
          "salad" => 75,
        );
        
        // Calculate total price
        $totalPrice = $prices[$foodItem] * $quantity;
        
        echo "<h2>Your Order</h2>";
        echo "<p>Food Item: $foodItem</p>";
        echo "<p>Quantity: $quantity</p>";
        echo "<p>Total Price: Php $totalPrice</p>";
      }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
