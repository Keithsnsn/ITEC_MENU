<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "Menu_Data";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$goodsType = $_POST['goods-type'];
$itemName = $_POST['item-name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Prepare the INSERT statement
$sql = "INSERT INTO sales (goods_type, item_name, quantity, price) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssdi", $goodsType, $itemName, $quantity, $price);

// Execute the statement
if ($stmt->execute()) {
    echo "Sales record added successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
