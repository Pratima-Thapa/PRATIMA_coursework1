<?php
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $order_id = intval($_POST['order_id']);

    if (isset($_SESSION['cart'][$order_id])) { 
        unset($_SESSION['cart'][$order_id]); 
        header("Location: order_confirmation.php"); 
        exit();
    } else {
        echo "Product not found in cart."; 
    }
} else {
    echo "Invalid request.";
}
?>
