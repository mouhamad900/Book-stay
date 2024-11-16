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
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    height: 100vh;
}
.item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #007bff;
      color: black;
      } 


h2 {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    font-size: 30px;
}

input[type="text"],
input[type="password"] {
    width: 90%;
    padding:10px;
    margin:8px;
    border: 1px solid #ccc ;
    border-radius: 5px;
}

button {
    background-color: #007bff;
    color: rgb(255, 255, 255);
    border-radius:3px;
    border:0px;
    padding: 10px;
    width: 100%;
}

.options {
    margin-top: 10px;
    text-align: center;
    font-size: small;
    color: #007bff;
    text-decoration: none;
}
.options a {
    color: #007bff;
    text-decoration: none;
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
        <!-- <ul style="align-self:flex-start;">
            <li><a href="index.html" class="menu"> Home </a> </li>
            <li><a href="About-us.html" class="menu"> About us </a> </li>
            <li><a href="Contact-us.html" class="menu" style="margin-right: 20px;"> Contac us </a> </li>
        </ul>  -->
    </nav> 

    <div class="content"> 
        <div>
        <h2 style="justify-self: flex-start">Find your perfect place <br>
         with <span style="color: rgb(9, 138, 237);">BookStay.com</span></h2>
        </div>
        <div  style="height: 30px">
        <h3> We provide you a large list of hotels availabe all over Lebanon with all informations and 
        details <h3>
        </div>
        </div>
</div>
</div>
<div class="login">
    <form action="login.php" method="POST">
        <div class="box" style="justify-self: center ,align-self: center">
            <h2>Login</h2>
            
                <div class="form-group">
                    <input type="text" name="username" placeholder="username" required>
                </div>
                <div class="form-group">
                    <input type="password"  name="password" placeholder="Password" required>
                </div>
                <button type="submit" id="submit-button">Login</button>
            
            <div class="options">
                <a href="https://accounts.google.com" target="_blank" class="forgot-password">Forgot Password?</a>
                <span>|</span>
                <a href="createaccount.php" class="create-account">Create an Account!</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>