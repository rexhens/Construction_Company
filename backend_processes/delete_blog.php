<?php
include("php_config/config.php"); // Include your database connection file

// Check if the blog post ID is provided in the URL
if (isset($_GET["blog_id"])) {
    $blog_id = $_GET["blog_id"];
    
    // Prepare the SQL statement to delete the blog post
    $query = "DELETE FROM BlogPosts WHERE blog_id=?";
    
    // Prepare and bind the statement
    $stmt = $conn->prepare($query);
    
    // Check if statement preparation was successful
    if($stmt) {
        $stmt->bind_param("i", $blog_id);
        
        // Execute the statement
        if($stmt->execute()) {
            // Redirect to a suitable page after successful deletion
            header("Location: index.php"); // Change the URL as needed
            exit();
        } else {
            echo "Error deleting blog post: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Statement preparation failed";
    }
} else {
    echo "Error: Blog post ID not provided";
}

// Close the database connection
$conn->close();
?>