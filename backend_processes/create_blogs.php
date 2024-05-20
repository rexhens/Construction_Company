<?php
<<<<<<< Updated upstream
include("php_config/config.php"); // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $blog_title = $_POST["blog_title"];
    $blog_content = $_POST["blog_content"];
    $blog_category = $_POST["blog_category"];
    // Assuming you handle file upload separately

    // Prepare the SQL statement to insert a new blog post
    $query = "INSERT INTO BlogPosts (date, title, category, content, user_id) VALUES (NOW(), ?, ?, ?, ?)";
    
    // Prepare and bind the statement
    $stmt = $conn->prepare($query);
    
    // Check if statement preparation was successful
    if($stmt) {
        $stmt->bind_param("sssi", $blog_title, $blog_category, $blog_content, $user_id);
        
        // Execute the statement
        if($stmt->execute()) {
            // Redirect to a suitable page after successful insertion
            header("Location: index.php"); // Change the URL as needed
            exit();
        } else {
            echo "Error creating blog post: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Statement preparation failed";
    }
} else {
    echo "Error: Form submission method not POST";
}

// Close the database connection
$conn->close();
=======
// Include database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data (e.g., check if required fields are not empty)

    // Prepare and bind SQL statement
    $sql = "INSERT INTO BlogPosts (date, title, category, photo, content, user_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $date, $title, $category, $photo, $content, $user_id);

    // Set parameters and execute statement
    $date = date("Y-m-d"); // Assuming date should be current date
    $title = $_POST["blog_title"];
    $category = $_POST["blog_category"];
    $photo = "path_to_uploaded_photo"; // Update with the path to the uploaded photo
    $content = $_POST["blog_content"];
    $user_id = $_SESSION["user_id"]; // Assuming user_id is stored in session after login

    if ($stmt->execute()) {
        // Blog post created successfully
        echo "Blog post created successfully";
    } else {
        // Error handling
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
>>>>>>> Stashed changes
?>
