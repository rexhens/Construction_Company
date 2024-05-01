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


?>