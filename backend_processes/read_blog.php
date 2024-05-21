<?php
include("php_config/config.php"); // Include your database connection file


// Check if the blog post ID is provided in the URL
if (isset($_GET["blog_id"])) {
    $blog_id = $_GET["blog_id"];
    
    // Prepare the SQL statement to fetch the blog post details
    $query = "SELECT * FROM BlogPosts WHERE blog_id=?";
    
    // Prepare and bind the statement
    $stmt = $conn->prepare($query);
    
    // Check if statement preparation was successful
    if($stmt) {
        $stmt->bind_param("i", $blog_id);
        
        // Execute the statement
        if($stmt->execute()) {
            // Get the result set
            $result = $stmt->get_result();
            
            // Check if the blog post exists
            if($result->num_rows > 0) {
                // Fetch the blog post details
                $blog_post = $result->fetch_assoc();
                
                // Display the blog post details
                echo "<h1>{$blog_post['title']}</h1>";
                echo "<p>Date: {$blog_post['date']}</p>";
                echo "<p>Category: {$blog_post['category']}</p>";
                echo "<p>{$blog_post['content']}</p>";
                // Display other details as needed
                
                // Close the result set
                $result->close();
            } else {
                echo "Blog post not found";
            }
        } else {
            echo "Error fetching blog post: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Statement preparation failed";
    }
} else {
    echo "Error: Blog post ID not provided";

// Retrieve blog posts from the database
$query = "SELECT * FROM BlogPosts";
$result = $conn->query($query);
}
// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Display blog post information
        echo "Title: " . $row["title"] . "<br>";
        echo "Date: " . $row["date"] . "<br>";
        echo "Category: " . $row["category"] . "<br>";
        // Add more fields as needed

        echo "<hr>"; // Add a horizontal line to separate each blog post
    }
} else {
    echo "No blog posts found";

}

// Close the database connection
$conn->close();
?>