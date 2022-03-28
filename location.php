<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:main.php');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="bg-location">
<div class="high">
        

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="index.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="storylist.php">Stories</a></li>
                <li><a class="nav-link" href="upload.php">Upload Image</a></li>
                <li><a class="nav-link" href="text.php">WriteStory</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
        
        <div class="cards">
                    <div class="card card1">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
               </p1>
                        <a href="palakkadview.php" class="button"> Palakkad</a>
                    </div>
                    <div class="card card2">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="ernakulamview.php" class="button">Ernakulam</a>
                    </div>
                    <div class="card card3">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="alapuzhaview.php" class="button">Alpuzha</a>
                    </div>
                    <div class="card card4">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="wayanadview.php" class="button">Wayanad</a>
                    </div>
                    <div class="card card5">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="kozhikodeview.php" class="button">Kozhikode</a>
                    </div>
                    <div class="card card6">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="trivandramview.php" class="button">Trivandram</a>
                    </div>
                    <div class="card card7">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="kannurview.php" class="button">Kannur</a>
                    </div>
                    <div class="card card8">
                    <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer.
                </p1>
                        <a href="kasarkodeview.php" class="button">Kasarkod</a>
                    </div>
                    
                    
                </div>
</div>
    </div>
    <footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>
</html>
