<?php
include('../php_config/config.php');

if (isset($_POST['team_id'])) {
    $team_id = $_POST['team_id'];
    $team_name = $_POST['team_name'];
    $team_supervisor = $_POST['team_supervisor'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE Teams SET team_name = ?, team_supervisor = ? WHERE team_id = ?");
    $stmt->bind_param("ssi", $team_name, $team_supervisor, $team_id);

    if ($stmt->execute()) {
        echo "Team updated successfully";
    } else {
        echo "Error updating team: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
