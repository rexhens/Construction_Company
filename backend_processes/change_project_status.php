<?php
include("C:/xampp/htdocs/Construction_Company/php_config/config.php");

if(isset($_POST['project_id'])) {
    // Retrieve data from POST request
    $projectId = $_POST['project_id'];
    $status = "Finalized";

    // Prepare the SQL statement
    $query = "UPDATE Projects 
              SET `status` = ?
              WHERE `project_id` = ?";

    // Prepare and bind the statement
    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param("si", $status, $projectId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Success";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Error: Missing required parameters.";
}
?>
