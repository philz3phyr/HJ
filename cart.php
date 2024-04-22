<?php
session_start();

// Check if the cart is empty
if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Cart is empty</p>";
} else {
    // Display cart items
    echo "<h1>Shopping Cart</h1>";
    echo "<ul>";
    $totalCost = 0;
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>{$item['name']} - ${$item['price']}</li>";
        $totalCost += $item['price'];
    }
    echo "</ul>";
    echo "<p>Total cost: $" . number_format($totalCost, 2) . "</p>";
    echo "<a href='checkout.php'>Proceed to Checkout</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

    <a href="browse.php">Back to Browse</a>

</body>
</html>
