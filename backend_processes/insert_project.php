<?php
include("php_config/config.php");

if(isset($_POST['submit_btn']))
{
    if(isset($_POST['project_name']) && isset($_POST['start_date']) && isset($_POST['end_date']) &&
     isset($_POST['budget']) && isset($_POST['options']) && isset($_POST['location']) && isset($_POST['description']))
     {
        $project_name = $_POST['project_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $budget = $_POST['budget'];
        $team_id = $_POST['options'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $status = "active";

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $query = "INSERT INTO Projects (`project_name`, `start_date`, `end_date`, `budget`, `status`, `location`, `description`, `team_id`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare and bind the statement
        $stmt = $conn->prepare($query);
        
        // Check if statement preparation was successful
        if($stmt){
            $stmt->bind_param("sssssssi", $project_name, $start_date, $end_date, $budget, $status, $location, $description, $team_id);

            // Execute the statement
            if($stmt->execute()) {
                echo "Success";
            } else {
                echo "Error: " . $stmt->error;
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
