<?php

include_once("db_connection.php");

$response = array("status" => "", "message" => "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['client_name']) && isset($_POST['content']) && isset($_POST['rating']) && isset($_POST['project_id'])) {
        $client_name = $_POST['client_name'];
        $content = $_POST['content'];
        $rating = $_POST['rating'];
        $project_id = $_POST['project_id'];

        // Check if all fields are filled
        if (!empty($client_name) && !empty($content) && !empty($rating) && !empty($project_id)) {
            $query = "INSERT INTO Testimonials (client_name, content, rating, project_id) VALUES (?, ?, ?, ?)";

            // Prepare and bind the statement
            $stmt = $conn->prepare($query);

            // Check if statement preparation was successful
            if ($stmt) {
                $stmt->bind_param("ssii", $client_name, $content, $rating, $project_id);

                // Execute the statement
                if ($stmt->execute()) {
                    $response["status"] = "success";
                    $response["message"] = "Testimonial added successfully.";
                } else {
                    $response["status"] = "error";
                    $response["message"] = "Error executing statement: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                $response["status"] = "error";
                $response["message"] = "Error preparing statement: " . $conn->error;
            }
        } else {
            $response["status"] = "error";
            $response["message"] = "Please fill in all fields.";
        }
    } else {
        $response["status"] = "error";
        $response["message"] = "Missing required fields";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Invalid request method";
}

// Return JSON response
echo json_encode($response);
?>
