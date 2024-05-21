<?php
// Start the session
session_start();

include("C:/xampp/htdocs/Construction_Company/php_config/config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (You should also include proper sanitization and validation)
    if ($username && $password) {
        $query = "SELECT * FROM `users` WHERE `username` = ? AND `password` = ?";
        
        // Prepare and bind the statement
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        
        // Execute the statement
        $stmt->execute();
        
        // Store the result
        $result = $stmt->get_result();
        
        // Check if the user exists
        if ($result->num_rows == 1) {
            // Set session variables
            $_SESSION['username'] = $username;
            
            // Redirect to the index page
            header("Location: /Construction_Company/index.php");
            exit();
        } else {
            // Set an error message
            $_SESSION['error_message'] = "Invalid username or password.";
            
            // Redirect back to the login page
            header("Location: /Construction_Company/login.php");
            exit();
        }
    } else {
        // Set an error message
        $_SESSION['error_message'] = "Please enter both username and password.";
        
        // Redirect back to the login page
        header("Location: /Construction_Company/login.php");
        exit();
    }
} else {
    // If form submission method is not POST, redirect back to the login page
    $_SESSION['error_message'] = "Form submission method not POST.";
    header("Location: /Construction_Company/login.php");
    exit();
}
?>
