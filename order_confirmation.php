<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            background-image: url('BACK.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
            font-family: sans-serif; 
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            margin: 0; 
            color: #333; 
        }

        .confirmation-content {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
        }

        h1 {
            color: #007bff; 
        }

        .order-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease; 
        }

        .order-button:hover {
            background-color: #0056b3; 
        }

        a { 
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="confirmation-content">  <h1>Order placed successfully!</h1>
        <p>Thank you for shopping.</p>
        <p>Further info about your order will be provided in your email.</p>
        <a href="index1.php"><button class="order-button">Ok</button></a>
    </div>
</body>
</html>