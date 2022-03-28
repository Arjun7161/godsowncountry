<?php
session_start();
if(!isset($_SESSION['adminname'])){
    header('location:main.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="high">
        <video class="video" autoplay loop muted plays-incline>
            <source src="Img/production ID_4148090.mp4" type="video/mp4">
        </video>

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="admin.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['adminname']; ?></h1>
                <li><a class="nav-link" href="admin.php">Home</a></li>
                <li><a class="nav-link" href="delete.php">Update/Delete</a></li>
                <li><a class="nav-link" href="login.php">Log In</a></li>
                <li><a class="nav-link" href="adminsignup.php">Admin Sign Up</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
        
        
    </div>
    <footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>

</html>