<?php
include("C:/xampp/htdocs/Construction_Company/php_config/config.php");


if (isset($_POST['project_name_edit']) && isset($_POST['end_date_edit']) &&
    isset($_POST['budget_edit']) && isset($_POST['options_edit']) && isset($_POST['description_edit'])) {

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
              SET `project_name` = ?, `end_date` = ?, `budget` = ?, `status` = ?, `description` = ?, `team_id` = ?,`status` = ?
              WHERE `project_id` = ?";

    // Prepare and bind the statement
    $stmt = $conn->prepare($query);

    // Check if statement preparation was successful
    if ($stmt) {
        $stmt->bind_param("ssissssi", $project_name, $end_date, $budget, $status, $description, $team_id,$status,$project_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Success";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        $js_code = "console.log('Error editing to Database!');";

        // Output the JavaScript code within a <script> tag
        echo "<script>{$js_code}</script>";
    }
} else {
    $js_code = "console.log('Error to Database!');";

    // Output the JavaScript code within a <script> tag
    echo "<script>{$js_code}</script>";
}
