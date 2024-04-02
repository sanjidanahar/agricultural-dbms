<?php
include 'header.php';
include 'connection.php'; // Include your database connection file

// Query to get the total number of items in the cart
$sql = "SELECT COUNT(*) AS total_items FROM cart";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_items = $row['total_items'];

// Query to calculate the total price of items in the cart (assuming each item has a price column in the database)
$sql = "SELECT SUM(price * quantity) AS total_price FROM cart INNER JOIN product_details ON cart.product_id = product_details.id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_price = $row['total_price'];

$conn->close();
?>

<div class="container" style="margin-top: 50px;">
    <h2>Product Details</h2>
    <!-- Your product details content here -->
    <p>Total Items in Cart: <?php echo $total_items; ?></p>
    <p>Total Price: $<?php echo $total_price; ?></p>
</div>

<?php include 'footer.php'; ?>
