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
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="high">
        <video class="video" autoplay loop muted plays-incline>
            <source src="Img/production ID_4148090.mp4" type="video/mp4">
        </video>

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="index.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li><a class="nav-link" href="login.php">Log In</a></li>
                <li><a class="nav-link" href="signup.php">Sign Up</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
        
        <div class="content">
            <div class="col">
             <h1>Kerala</h1>
            <p1>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p1>
                </div>
                <div class="col">
                    <div class="card card1">
                        <a href="location.php" class="button"> Location</a>
                    </div>
                    <div class="card card2">
                        <a href="savefile.php" class="button">Attractions</a>
                    </div>
                </div>
                </div>
    </div>
    <footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>

</html>