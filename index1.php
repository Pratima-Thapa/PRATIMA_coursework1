<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Store - Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Toy Store!</h1>
        <nav>
        <div class="profile">
                <img src="product.jpg" alt="photo" height="100px" width="100px"></img><br>
        </div>
            <a href="product.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="order.php">Order now</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main class="index1-background">
    <h2>Your one-stop shop for amazing toys!</h2>
    <p>Browse our collection and find the perfect toy for your little one😊</p>
        <div class="offer">
            <div class="offer-container">
                <img src="offer.jpg" alt="photo"><br>
                <span class="offer-title">Teddy Bear</span>
                <span class="rating">★★★★★ 18,147</span>
                <span class="price">Rs 6,000</span>
                <span class="discount">Rs 10,000</span>
                <span class="deal">50% off Prime Day Deal</span>
                <button class="order-button">Order Now</button>
            </div>
            <div class="offer-container">
                <img src="robot.jpg" alt="photo"><br>
                <span class="offer-title">Robotic Dinosaurr </span>
                <span class="rating">★★★★★ 18,147</span>
                <span class="price">Rs 10,000</span>
                <span class="discount">Rs 20,000</span>
                <span class="deal">50% off Prime Day Deal</span>
                <button class="order-button">Order Now</button>
            </div>
            <div class="offer-container">
                <img src="drone.jpg" alt="photo"><br>
                <span class="offer-title">Drone</span>
                <span class="rating">★★★★★ 18,147</span>
                <span class="price">Rs 80,000</span>
                <span class="discount">Rs 100,000</span>
                <span class="deal">20% off Prime Day Deal</span>
                <button class="order-button">Order Now</button>
            </div>
        </div>
    </main>
</body>
</html>

