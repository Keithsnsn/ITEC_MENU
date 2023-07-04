<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    /* Custom styling for the form submission result page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      margin-top: 0;
    }

    p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4c55af;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      margin-right: 10px;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Submission Result</h2>
    <?php
    // Retrieve and display form data
    if (isset($_POST['goods-type']) && isset($_POST['item-name']) && isset($_POST['quantity']) && isset($_POST['price'])) {
      include 'Menu_Data.php';
      $goodsType = $_POST['goods-type'];
      $itemName = $_POST['item-name'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      echo "<p><strong>Type of Goods:</strong> " . $goodsType . "</p>";
      echo "<p><strong>Item Name:</strong> " . $itemName . "</p>";
      echo "<p><strong>Quantity:</strong> " . $quantity . "</p>";
      echo "<p><strong>Price:</strong> $" . $price . "</p>";
    } else {
      echo "<p>No form data submitted.</p>";
    }
    ?>
  </div>
  <a href="Menu.html" class="btn">Go Back</a>
  <a href="Menu_View.php" class="btn">View Entries</a>
</body>
</html>
