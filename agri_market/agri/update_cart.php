<?php
session_start(); // Start the session to access session variables

if(isset($_POST['update_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    
    // Update quantity in the cart (assuming your cart table has a quantity column)
    $_SESSION['cart'][$product_id]['quantity'] = $quantity;
}

header("Location: view_cart.php");
exit();
?>
