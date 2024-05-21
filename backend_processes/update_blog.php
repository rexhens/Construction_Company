<?php
include("php_config/config.php"); // Include your database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if(isset($_POST['blog_id']) && isset($_POST['blog_title']) && isset($_POST['date']) && isset($_POST['content']) && isset($_POST['category'])) {
        
        // Extract data from the form
        $blog_title = trim($_POST["blog_title"]);
        $blog_content = trim($_POST["blog_text"]);
        
        // Prepare the SQL statement for updating the blog post
        $query = "UPDATE BlogPosts SET title=?, content=? WHERE blog_id=?";
        
        // Prepare and bind the statement
        $stmt = $conn->prepare($query);
        
        // Check if statement preparation was successful
        if($stmt) {
            $stmt->bind_param("ssssi", $blog_title,  $category_id, $content, $blog_id);
            
            // Execute the statement
            if($stmt->execute()) {
                echo "Blog post updated successfully";
            } else {
                echo "Error updating blog post: " . $stmt->error;
            }
            
            // Close the statement
            $stmt->close();
        } else {
            echo "Error: Statement preparation failed";
        }
    } else {
        echo "Error: Missing required fields";
    }
}
?>