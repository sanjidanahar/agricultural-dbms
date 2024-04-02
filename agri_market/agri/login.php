<?php include 'header.php'; ?>

<div class="container" style="margin-top: 15%;color: green">
    <h2 style="text-align: center;font: size 2em;color:black;">Welcome to Agri Market!Please Login.</h2>
    <form action="login.php" method="post" style="max-width: 400px; margin: 0 auto;">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block;">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required style="width: 100%; padding: 10px;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password" style="display: block;">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required style="width: 100%; padding: 10px;">
        </div>
        <button type="submit" class="btn btn-primary" name="login" style="width: 100%; padding: 10px;">Login</button>
    </form>
    



                    <div class="login-register" style="text-align: center; font-family: Arial, sans-serif;">
    <p style="color: #333; font-size: 16px; margin-bottom: 10px;">Don't have an account? <a href="register.php" class="register-link" style="color: #007bff; text-decoration: none;">Register</a></p>
</div>


</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form submission
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user credentials (example)
    if ($email === "example@example.com" && $password === "password") {
        // Authentication successful, redirect to dashboard or homepage
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, display error message
        echo "<div class='container'><p class='text-danger'>Invalid email or password. Please try again.</p></div>";
    }
}
?>

<?php include 'footer.php'; ?>
