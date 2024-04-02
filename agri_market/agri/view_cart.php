<?php
include 'header.php';
include 'db_connection.php'; // Include your database connection file

// Query to get the cart items and their details
$sql = "SELECT cart.product_id, products.name, products.price, cart.quantity FROM cart INNER JOIN products ON cart.product_id = products.id";
$result = $conn->query($sql);

// Check if there are items in the cart
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Display cart items and options for managing the cart (e.g., update quantity, remove item)
        echo "<div>";
        echo "<h3>".$row['name']."</h3>";
        echo "<p>Price: $".$row['price']."</p>";
        echo "<form action='update_cart.php' method='post'>";
        echo "<input type='hidden' name='product_id' value='".$row['product_id']."'>";
        echo "<input type='number' name='quantity' value='".$row['quantity']."' min='1'>";
        echo "<button type='submit' name='update_cart'>Update Quantity</button>";
        echo "</form>";
        echo "<a href='remove_from_cart.php?product_id=".$row['product_id']."'>Remove from Cart</a>";
        echo "</div>";
    }
} else {
    echo "Your cart is empty.";
}

$conn->close();
?>

<?php include 'footer.php'; ?>
