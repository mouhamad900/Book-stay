<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if((isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"]))) {
        $username = $_POST["username"];
        $pass = $_POST["password"];
        
        $query = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
        $result = $conn->query($query);
        $nbrows = $result->num_rows;
        
        if($nbrows == 1){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role_id'] = $row['role_id'];

        header("location:home.php");
    }else if($nbrows == 0) {
        header("location:createaccount.php");
    }
}
$conn->close();
}


?>