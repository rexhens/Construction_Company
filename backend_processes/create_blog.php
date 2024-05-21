
<?php

include("C:/xampp/htdocs/Construction_Company/php_config/config.php"); // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $blog_title = trim($_POST["blog_title"]);
    $blog_content = trim($_POST["blog_text"]);

    // Check if required fields are not empty
    if (empty($blog_title) || empty($blog_content)) {
        echo "Error: All fields are required.";
        exit;
    }



    // Prepare the SQL statement to insert a new blog post
    $query = "INSERT INTO BlogPosts (title, content, user_id) VALUES (?, ?, ?)";
    
    // Prepare and bind the statement
    if ($stmt = $conn->prepare($query)) {
        // Assuming $user_id is the ID of the current user
        $user_id = 1; // Replace with the actual user ID
        $stmt->bind_param("ssi", $blog_title, $blog_content, $user_id);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Return a success message
            echo "Success";
            header("Location: /Construction_Company/blog.php");
                        exit();
        } else {
            echo "Error creating blog post: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Statement preparation failed - " . $conn->error;
    }
} else {
    echo "Error: Form submission method not POST";
}

// Close the database connection
$conn->close();

?>
