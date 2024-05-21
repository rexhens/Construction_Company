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


    // Check if the staff ID is set
    if (isset($_POST["delete_staff"])) {
        $staff_id = $_POST["staff_id"];
        
        // Prepare and execute the DELETE statement
        $sql = "DELETE FROM Staff WHERE staff_id = $staff_id";
        
        if ($conn->query($sql) ===  TRUE) {
            echo "Staff  deleted";
        } else {
            // Handle deletion failure
            echo "Error deleting record: " . $conn->error;
        }
        exit;
    } else {
        // Handle missing staff ID
        echo "Staff ID is missing";
    }

?>
