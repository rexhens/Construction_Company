<?php
$server = "localhost";
$username = "root";
$password = "";
$database_name= "bobthebuilder";

// Create connection
$conn = mysqli_connect( $server, $username, $password, $database_name );	

if (mysqli_connect_errno() ) {
echo  "Failed to connect database!<br />
Error: ".mysqli_connect_error();
exit;
}else{
    $js_code = "console.log('Connected Succesfuly to Database!');";

    // Output the JavaScript code within a <script> tag
    echo "<script>{$js_code}</script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namess = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
    $status = $_POST['status'];
    $team_id = $_POST['team_id'];

    $sql = "UPDATE Staff SET name=?, surname=?, email=?, phone_number=?, job_tittle=?, salary=?, status=?, team_id=? WHERE staff_id=?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssdssi", $name, $surname, $email, $phone_number, $job_title, $salary, $status, $team_id, $staff_id);

        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    }
    $conn->close();
}
?>
