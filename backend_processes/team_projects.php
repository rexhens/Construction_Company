<?php
// Include database connection
include("../php_config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['team_id'])) {
    $team_id = mysqli_real_escape_string($conn, $_POST['team_id']);

    // SQL query to fetch projects for the given team_id
    $sql = "SELECT * FROM Projects WHERE team_id = $team_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            // Output project details in list items
            echo "<li>";
            echo "Project Name: " . $row["project_name"] . "<br>";
            echo "Start Date: " . $row["start_date"] . "<br>";
            echo "End Date: " . $row["end_date"] . "<br>";
            echo "Budget: " . $row["budget"] . "<br>";
            echo "Status: " . $row["status"] . "<br>";
            echo "Location: " . $row["location"] . "<br>";
            echo "Description: " . $row["description"];
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No projects found for this team.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
