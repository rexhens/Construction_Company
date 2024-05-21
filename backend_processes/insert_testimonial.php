<?php

include_once("C:/xampp/htdocs/Construction_Company/php_config/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $client_name = $_POST['client_name'];
    $content = $_POST['content'];
    $rating = $_POST['rating'];
    $project_id = $_POST['project_id'];


    $query = "INSERT INTO Testimonials (client_name, content, rating, project_id) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    
    if ($stmt) {
        $stmt->bind_param("ssii", $client_name, $content, $rating, $project_id);
        
        if($stmt->execute()) {
            header("Location: /Construction_Company/testimonial.php");
            exit();
            
        } else {
            echo "Error creating blog post: " . $stmt->error;
        }
      
        $stmt->close();
    } else {
        echo "Error: Statement preparation failed";
    }
} else {
    echo "Error: Form submission method not POST";
}

$conn->close();

?>