<?php
session_start();
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]++;
        } else {
            $_SESSION['cart'][$product_id] = 1;
        }
    } elseif (isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        if (isset($_SESSION['cart'][$delete_id])) {
            unset($_SESSION['cart'][$delete_id]);
        }
    }
}

$cart_items = !empty($_SESSION['cart']) ? implode(",", array_keys($_SESSION['cart'])) : '';
$result = $cart_items ? $conn->query("SELECT * FROM product WHERE id IN ($cart_items)") : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Toy Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Your Cart</h1>
</header>

<main class="cart-container">
    <?php if (!empty($result) && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="cart-item">
                <img src="img/<?php echo htmlspecialchars($row['Image']); ?>" alt="<?php echo htmlspecialchars($row['Name']); ?>">
                <h2><?php echo htmlspecialchars($row['Name']); ?></h2>
                <p>NRP <?php echo htmlspecialchars($row['Price']); ?></p>
                <p>Quantity: <?php echo $_SESSION['cart'][$row['id']]; ?></p>
                <form method="POST" action="">
                    <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                    <button type="submit">Delete</button>
                </form>
                <form method="POST" action="order.php">
                    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                    <button class="order-button">Order Now</button>
                </form>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Your cart is empty!</p>
    <?php endif; ?>
</main>

</body>
</html>




