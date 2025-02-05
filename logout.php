<?php
session_start();

if (isset($_GET['logout'])) {  
    session_destroy();
    $message = "Thank you for visiting! See you soon.";
    $redirect = "index.php";
} else {
    $message = "Are you sure you want to logout?";
    $redirect = ""; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    
    <link rel="stylesheet" href="style.css">  

    <script>
        function confirmLogout() {
            if (confirm("<?php echo $message; ?>")) {
                if ("<?php echo $redirect; ?>" !== "") {
                    window.location.href = "<?php echo $redirect; ?>";
                } else {
                    alert("Thank you for visiting! See you soon.");
                    window.location.href = "index.php"; 
                }
            } 
        }
    </script>
</head>
<body class="body-logout">
    <button class="logout" onclick="confirmLogout()">Logout</button>
</body>
</html>
