<?php
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $max_quantity = 10;

    if ($quantity > 0 && $quantity <= $max_quantity) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] += $quantity;
        } else {
            $_SESSION['cart'][$product_id] = $quantity;
        }

        echo "<script>
            alert('Product added to cart! Enjoy shopping!');
            window.location.href = 'cart.php';
        </script>";
        exit();
    } else {
        echo "<script>
            alert('Invalid quantity. Please try again.');
            window.location.href = 'product.php';
        </script>";
        exit();
    }
}
?>
