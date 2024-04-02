<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "agri_market";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
    die("Connection failed".$conn->connect_errno);

}
echo "Connection Successful";
?>