<?php
$servername = "127.0.0.1";
$username = "aveann";
$password = "aveann";
$database = "menu_data";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT goods_type, item_name, quantity, price, total FROM sales";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Retrieved Form Data</title>
  <style>
    /* Custom styling for the retrieved form data */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      color: #333;
    }

    .form-data {
      background-color: #f5f5f5;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-data p {
      margin: 0;
    }

    hr {
      margin: 20px 0;
      border: 0;
      border-top: 1px solid #ccc;
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
  <h2>Retrieved Form Data</h2>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      echo "<p><strong>Type of Goods:</strong> " . $row["goods_type"] . "</p>";
      echo "<p><strong>Item Name:</strong> " . $row["item_name"] . "</p>";
      echo "<p><strong>Quantity:</strong> " . $row["quantity"] . "</p>";
      echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
      echo "<p><strong>Total:</strong> $" . $row["total"] . "</p>";
      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "<p>No form data found.</p>";
  }

  // Close the connection
  $conn->close();
  ?>
  <a href="Menu.html" class="btn">New Entry</a>
</body>
</html>
