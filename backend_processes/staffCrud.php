<?php
include("php_config/config.php");
$sql = "SELECT * FROM Staff";
$result = $conn->query($sql);

$staff = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $staff[] = $row;
    }
}

$conn->close();
?>