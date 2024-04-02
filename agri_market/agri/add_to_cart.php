<?php
session_start(); // Start the session to access session variables

// Check if product ID is received
if(isset($_POST['product_id'])) {
    // Get the product ID from the form
    $product_id = $_POST['product_id'];
    
    // Check if the user is logged in (you might need to implement user authentication)
    if(isset($_SESSION['user_id'])) {
        // Get the user ID from the session
        $user_id = $_SESSION['user_id'];
        
        // Include your database connection file
        include 'connection.php';
        
        // Prepare and execute the SQL statement to insert the product into the cart
        $sql = "INSERT INTO cart (product_id, user_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $product_id, $user_id);
        $stmt->execute();
        
        // Close the database connection
        $stmt->close();
        $conn->close();
    } else {
        // If the user is not logged in, you can redirect them to the login page or handle it in another way
        header("Location: login.php");
        exit();
    }
}

// Redirect back to the product details page
header("Location: product_details.php");
exit();
?>
