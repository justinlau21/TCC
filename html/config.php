<?php
// Create connection
$conn = new mysqli('localhost', 'inventory', 'admin', 'inventorymanagement');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



