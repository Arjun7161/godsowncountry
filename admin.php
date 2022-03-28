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
        <div class="content">
            <div class="col">
             <h1>Kerala</h1>
            <p1>For many travelers, Kerala is South India's most serenely beautiful state. This slender coastal strip is defined by its layered landscape: almost 373 miles (600km) of glorious Arabian Sea coast and beaches; a languid network of glistening backwaters; and the spice- and tea-covered hills of the Western Ghats, dotted with fiercely protected wildlife reserves and cool hill stations such as Munnar. Just setting foot on this swathe of soul-soothing, palm-shaded green will slow your subcontinental stride to a blissed-out amble. Kerala is a world away from the hectic action of the rest of India, its long, fascinating backstory illuminated by historically evocative cities like Kochi (Cochin) and Thiruvananthapuram (Trivandrum).

Besides the famous backwaters, elegant houseboats, ayurvedic treatments and delicately spiced, taste-bud-tingling cuisine, Kerala is home to wild elephants, exotic birds and the odd tiger, while vibrant traditions such as Kathakali, theyyam (a trance-induced ritual), temple festivals and snake-boat races frequently bring even the smallest villages to life.</p1>
                </div>
        
    </div>
    <footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>

</html>