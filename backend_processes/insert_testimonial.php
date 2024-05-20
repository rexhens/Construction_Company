<?php

include_once("backend_processes/db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $client_name = $_POST["client_name"];
    $content = $_POST["content"];
    $rating = $_POST["rating"];
    $project_id = $_POST["project_id"];
    if (empty($client_name) || empty($content) || empty($rating) || empty($project_id)) {
        echo "Please fill in all fields.";
    } else {
        
        $query = "INSERT INTO testimonials (client_name, content, rating, project_id) VALUES ('$client_name', '$content', '$rating', '$project_id')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Testimonial added successfully.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>
