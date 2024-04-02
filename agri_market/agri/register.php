<?php include 'header.php';?>

<?php
// Database connection setup (Replace with your actual database connection details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri_market";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables for form data
$username = $email = $password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = sanitize_input($_POST["username"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Validate form data
    $errors = array();

    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    // If there are no validation errors, proceed to save user data to the database
    if (empty($errors)) {
        // Insert user data into the database
        $sql = "INSERT INTO userinformation1 (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            // Redirect to a success page or display a success message
            header("Location: registration_success.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

// Close database connection
$conn->close();
?>

<div class="container" style="margin-top: 50px;">
    <h2 style="text-align: center;">User Registration</h2>
    <form action="register.php" method="post" style="max-width: 400px; margin: 0 auto;">
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="username" style="display: block;">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required style="width: 100%;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block;">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required style="width: 100%;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password" style="display: block;">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required style="width: 100%;">
        </div>
        <button type="submit" class="btn btn-primary" name="register" style="width: 100%;">Register</button>
    </form>
</div>

<?php include 'footer.php'; ?>
