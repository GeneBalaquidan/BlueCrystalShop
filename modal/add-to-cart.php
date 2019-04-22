<?php
// Include config file
 session_start();
require_once "../core/config.php";
// Check if the user is logged in, if not then redirect him to login page
if((!isset($_SESSION["loggedin"])) || ($_SESSION["loggedin"] !== true)){
    header("location: login.php");
    exit;
}

$sql = "SELECT * FROM products p JOIN users u WHERE p.featured = 1";
$featured = $mysqli-> query($sql);
$product = mysqli_fetch_assoc($featured);
// Define variables and initialize with empty values
$username = $product['username'];
$product = $product['title'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "INSERT IGNORE INTO shopping_cart(username, cart_item,price,quantity,images) VALUES (?, ?, ?, ?, ?)";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

    }

?>