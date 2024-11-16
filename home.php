<!DOCTYPE html>
<html>

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
    </head>

<body>
<div class="hero">

    <video autoplay loop muted plays-inline class="back-video"> 
        <source src="entitys\header-background.mp4" type="video/mp4">
    </video>

    <nav>  
        <img src="entitys\BookStay.png" class="logo" style="align-self: flex-start;">
        <ul style="align-self:flex-start;">
            <li><a href="home.php" class="menu"> Home </a> </li>
            <li><a href="About-us.html" class="menu"> History </a> </li>
            <li><a href="logout.php" class="menu" style="margin-right: 20px;"> Logout </a> </li>
        </ul> 
    </nav> 
</div>
    
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
<?php 
session_start();
if($_SESSION['role_id'] == 3){
echo "<div id='grid'>
    <div class='grid-item'>
        <img src='test/dorm-room-01.jpg' class='images'> 
        <p>Name: </p>
        <p>Location: </p>
    </div>
    <div class='grid-item'>
        <img src='images+video+logo/first-year-village-exterior_750xx2048-1152-0-107.jpg' class='images'>
        <p>Appartment size:</p>
        <p>Number of Rooms: </p>
    </div>
    <div class='grid-item'>
        <img src='images+video+logo/iStock-1130938108-scaled.jpg' class='images'>
        <p>Email:</p>
        <p>Phone Number: </p>
    </div>
    <div class='grid-item'>
        <p>Redway</p>
    </div>
    <div class='grid-item'>
        <p>Bahous</p>
    </div>
    <div class='grid-item'>
        <img src='test/dorm-room-01.jpg' class='images'> 
        Cronus
    </div>
    <div class='grid-item'>
        <img src='test/dorm-room-01.jpg' class='images'> 
        Cronus
    </div>
</div>";
}
?>
</body>
</html>