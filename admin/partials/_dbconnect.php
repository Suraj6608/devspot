<?php
$server = "localhost";
$username = "root";
$password = "mypassword";
$database = "OPD";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
