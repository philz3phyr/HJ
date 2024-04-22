<?php
session_start();

// Items array (simulated database)
$items = array(
    array("id" => 1, "name" => "Item 1", "price" => 10.99),
    array("id" => 2, "name" => "Item 2", "price" => 5.99),
    array("id" => 3, "name" => "Item 3", "price" => 7.50),
    // Add more items as needed
);

// Check if the Add to Cart button is clicked
if(isset($_POST['add_to_cart'])) {
    $itemId = $_POST['item_id'];
    // Add item to cart (using session variable)
    $_SESSION['cart'][$itemId] = $items[$itemId - 1]; // Assuming item IDs start from 1
    echo "<script>alert('Item added to cart');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Items</title>
</head>
<body>
    <h1>Browse Items</h1>

    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <?php echo $item['name']; ?> - $<?php echo number_format($item['price'], 2); ?>
                <form method="post" action="browse.php">
                    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="cart.php">View Cart</a>

</body>
</html>
