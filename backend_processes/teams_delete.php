<?php
include("../php_config/config.php");

if (isset($_POST['delete_team'])) {
    $team_id = $_POST['team_id'];
    
    $sql = "DELETE FROM Teams WHERE team_id = $team_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Team with ID $team_id deleted successfully!";
    } else {
        echo "Error deleting team: " . $conn->error;
    }
    exit;
} else {
    echo "No team to delete specified!";
}
?>
