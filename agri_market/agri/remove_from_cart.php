<?php
session_start(); // Start the session to access session variables

if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    // Remove item from the cart
    unset($_SESSION['cart'][$product_id]);
}

header("Location: view_cart.php");
exit();
?>
