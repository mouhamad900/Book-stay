<?php

require_once 'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password =($_POST['password']);
    $confirm_password=($_POST['confirmpassword']);
    $intVar = NULL;
    $role_id =3;

    $sql1 = "SELECT * FROM user WHERE username='$username'";
    $res = $conn->query($sql1);
    $nbrows = $res -> num_rows;

    if($nbrows == 1){
        header("location:index.php");
    } else {
        $sql="INSERT INTO user(id, name, phone, email, username, pass, role_id)
        VALUES(?,?,?,?,?,?,?)";

        $stmt= $conn->prepare($sql);
        $stmt->bind_param("isssssi",$intVar, $name, $phonenumber,$email,$username, $password, $role_id);

        if($stmt->execute()){  
            session_start();
            $_SESSION['role_id'] = $role_id;
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            header("location:home.php");
              
              }else{
                echo "ERROR: " . $sql . "<br>" . $conn->error;
              }
              $stmt->close();
              $conn->close();
    }
    }
  //}

    //(27 header..(createaccount.html)??)
    //
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner&family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner&family=Open+Sans:wght@700&family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="description" content="Hotel finder in Lebanon">
        <meta name="keyword" content="hotels, vacation, travel">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BookStay</title>
        <link rel="icon" type="image/x-icon" href="entitys\car.ico">
  <script src="./regular.js"></script>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding:0;
    height:100vh;
}  
.item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #007bff;
      color: black;
      } 
form{
    background-color:#fff;
    padding: 30px;
    border-radius:5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;;
}
h2{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    font-size: 30px;
}
input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"]{
    width: 90%;
    padding:10px;
    margin:10px;
    border: 1px solid #ccc ;
    border-radius: 5px;
}
input[type="submit"]{
    background-color: #007bff;
    color: rgb(255, 255, 255);
    border-radius:3px;
    border:0px;
    padding: 10px;
    width: 100%;
}
.note{
    color: red;
    font-size: small;
}

.a{
    font-size: small;
    text-align: center;
    
}
.a1{
    color: #007bff;
    text-decoration: none;
}
.error{
  padding:10px;
  color: red;
  font-size:small;
}

</style>
</head>
<body class="item">
<div class="hero">

<video autoplay loop muted plays-inline class="back-video"> 
    <source src="entitys\header-background.mp4" type="video/mp4">
</video>

<nav>  
    <img src="entitys\BookStay.png" class="logo" style="align-self: flex-start;">
    <ul style="align-self:flex-start;">
        <li><a href="index.html" class="menu"> Home </a> </li>
        <li><a href="About-us.html" class="menu"> About us </a> </li>
        <li><a href="Contact-us.html" class="menu" style="margin-right: 20px;"> Contac us </a> </li>
    </ul> 
</nav> 

<div class="content"> 
    <div>
        <h2 style="justify-self: flex-start">Find your perfect place <br>
        with <span style="color: rgb(9, 138, 237);">BookStay.com</span></h2>
    </div>
    <div  style="height: 30px">
        <h3>We provide you a large list of hotels availabe all over Lebanon with all informations and 
        details<h3>
    </div>
</div>
</div>
<div class="login">
    <form action="createaccount.php" method="post" id="myForm" onsubmit="return validateForm()">
    <h2>Register</h2>
    <!--<input type="text" name="firstname" placeholder="First name" id="f" required>
    <input type="text" name="lastname" placeholder="Last Name" id="l" required>
    -->
    <input type="text" name="name" placeholder="name" id="u" required> 
    <input type="text" name="username" placeholder="Username" id="u" required> 
    <input type="text" name="phonenumber" placeholder="Phone Number" id="n" required>
    <input type="email" name="email" placeholder="Email" id="m"required>
    <input type="password" name="password" placeholder="Create password" id="p" required>
    <input type="password" name="confirmpassword" placeholder="Confirm password" id="cp" required >
    <span id="passwordError" class="error"></span><br>


    <!--<p>
        <b>Gender:</b>
        <span><input type="radio" name="gender" value="male">Male</span>
        <span><input type="radio" name="gender" value="female">Female</span>
    </p>-->
    <!--  <fieldset>
            <legend>Reservation</legend>
            <input type="date" name="date1" required><span>to</span><input type="date" name="date2" required>
        </fieldset> -->
    <p><input type="submit" value="Register"></p>
    <div class="a">
    <a href="index.php" class="a1">I have an Account!</a><br>
    </div>
    <span class="note">Register helps us preserve the customer's rights in the event of any error!</span>

    </form> 
</div>

</body>
</html>
   



