<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - AZHAR STORES</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>AZHAR STORES</h1>
    </header>

    <div class="cart">
        <h2>Your Cart</h2>
        <ul>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_name"]) && isset($_POST["quantity"])) {
                $product_name = $_POST["product_name"];
                $quantity = $_POST["quantity"];
                echo "<li>$product_name - Quantity: $quantity</li>";
            }
            ?>
        </ul>
        <button><a href="https://wa.me/+917002711744">Checkout</a></button>
    </div>
</body>
</html>
