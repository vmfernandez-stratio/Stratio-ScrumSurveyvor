<?php
function getdb(){
$servername = "localhost";
$username = "huscqxzwaw";
$password = "2WWKxxxxHr";
$db = "huscqxzwaw";

try {

    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully";
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>
