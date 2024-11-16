<?php 
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "bookstay";

$conn = new mysqli("localhost", "root", "", "bookstay");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

?>