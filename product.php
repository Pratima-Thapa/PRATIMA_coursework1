<?php
require 'db_config.php';
$result = $conn->query("SELECT * FROM product");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Toy Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="product_pp">
    <header>
        <h1>Our Toys</h1>
    </header>
    <div class="product">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product_container">
            <img src="img/<?php echo $row['Image']; ?>" alt="<?php echo $row['Name']; ?>"><br>
                <h2><?php echo $row['Name']; ?></h2>
                <p>NRP<?php echo $row['Price']; ?></p>
                <p><?php echo $row['Quantity']; ?>/<p>
                <p><?php echo $row['Describe']; ?>/<p>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" max="15" required>
    
                    <button type="submit">Add to Cart</button>
                </form>

            </div>
            
        <?php endwhile; ?>
        
    </div>
</body>
</html>
