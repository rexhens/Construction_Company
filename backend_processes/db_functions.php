<?php
include("php_config/config.php");
function getTeams()
{
    global $conn;
    $query = "SELECT * FROM Teams;";
    $result = $conn->query($query);
    if($result)
    {
        return $result;
    }
    return null;
}

function get_projects($offset,$limit){
    global $conn;
    $query = "SELECT * FROM Projects LIMIT $offset, $limit;";
    $result = $conn->query($query);
    if($result)
    {
        return $result;
    }
    return null;
}
?>