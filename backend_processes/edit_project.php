<?php
include("C:/xampp/htdocs/Construction_Company/php_config/config.php");

if (isset($_POST['project_name_edit']) && isset($_POST['end_date_edit']) &&
    isset($_POST['budget_edit']) && isset($_POST['options_edit']) && isset($_POST['description_edit']) && isset($_POST['project_id'])) {

    // Assign values from POST data
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name_edit'];
    $end_date = $_POST['end_date_edit'];
    $budget = $_POST['budget_edit'];
    $team_id = $_POST['options_edit'];
    $description = $_POST['description_edit'];
    $status = "active"; // Assuming this is a constant value

    // Prepare the SQL statement using prepared statements to prevent SQL injection
    $query = "UPDATE Projects 
              SET `project_name` = ?, `end_date` = ?, `budget` = ?, `status` = ?, `description` = ?, `team_id` = ?
              WHERE `project_id` = ?";

    // Prepare and bind the statement
    $stmt = $conn->prepare($query);

    // Check if statement preparation was successful
    if ($stmt) {
        $stmt->bind_param("ssisssi", $project_name, $end_date, $budget, $status, $description, $team_id, $project_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Success Editing";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Error: Missing required POST parameters";
}

?>
