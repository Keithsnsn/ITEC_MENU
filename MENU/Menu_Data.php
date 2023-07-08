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

// Retrieve form data
$goodsType = $_POST['goods-type'] ?? '';
$itemName = $_POST['item-name'] ?? '';
$quantity = $_POST['quantity'] ?? 0;
$price = $_POST['price'] ?? 0;
$total = $_POST['total'] ?? 0;

// Prepare the INSERT statement
$sql = "INSERT INTO Menu (goods_type, item_name, quantity, price, total) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssidd", $goodsType, $itemName, $quantity, $price, $total);

// Execute the statement
if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
