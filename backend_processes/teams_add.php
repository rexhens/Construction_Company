<?php
include("../php_config/config.php");

if(isset($_POST['submit_btn'])) {
    if(isset($_POST['team_name']) && isset($_POST['team_supervisor'])) {
        $team_name = $_POST['team_name'];
        $team_supervisor = $_POST['team_supervisor'];
        if(!empty($team_name) && !empty($team_supervisor)) {
            // Prepare the SQL statement using prepared statements to prevent SQL injection
            $query = "INSERT INTO Teams (team_name, team_supervisor) VALUES (?, ?)";

            // Prepare and bind the statement
            $stmt = $conn->prepare($query);
            
            // Check if statement preparation was successful
            if($stmt) {
                $stmt->bind_param("ss", $team_name, $team_supervisor);

                // Execute the statement
                if($stmt->execute()) {
                    echo "Team added successfully!";
                } else {
                    echo "Error executing statement: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } else {
            echo "Error: Missing required fields";
        }
    } else {
        echo "Error: Missing team_name or team_supervisor fields";
    }
}
?>
