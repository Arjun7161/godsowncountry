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
                    <p1>Palakkad is known as "The Granary of Kerala". Palakkad is a vast stretch of fertile plains interspersed with hills, rivers, mountain streams and forests and is home to the Silent Valley National Park.
               </p1>
                        <a href="palakkadview.php" class="button"> Palakkad</a>
                    </div>
                    <div class="card card2">
                    <p1>For the outside world,Kochi referred to in the history of Kerala as the Queen of Arabian Sea. The densely populated District embodies the achievements of the Kerala State in literacy, industry, trade.
                </p1>
                        <a href="ernakulamview.php" class="button">Ernakulam</a>
                    </div>
                    <div class="card card3">
                    <p1>In the early first decade of the 20th Century the then Viceroy of the Indian Empire, Lord Curzon made a visit in the State to Alleppey. Thus the sobriquet found its place in the world Tourism Map.
                </p1>
                        <a href="alapuzhaview.php" class="button">Alapuzha</a>
                    </div>
                    <div class="card card4">
                    <p1>Adorning the northern hills of Kerala is the beautiful district of Wayanad. Often called the spice garden of India, Wayanad is laid with various spices like cardamom, Black pepper, Star Anise, Fenugreek, Black cumin and more. 
                </p1>
                        <a href="wayanadview.php" class="button">Wayanad</a>
                    </div>
                    <div class="card card5">
                    <p1>Vasco da Gama landed on its shores in 1498, thereby making Kozhikode the most crucial region of the Malabar coast. Home to historic sites, wildlife sanctuaries, rivers and hills make Kozhikode a popular destination.
                </p1>
                        <a href="kozhikodeview.php" class="button">Kozhikode</a>
                    </div>
                    <div class="card card6">
                    <p1>Thiruvananthapuram is the capital city of Kerala. The district in the southwestern tip of India is noted for internationally renowned beaches, historic monuments, backwater stretches and cultural heritage.
                </p1>
                        <a href="trivandramview.php" class="button">Trivandram</a>
                    </div>
                    <div class="card card7">
                    <p1>The City of Looms and Lores, thanks to the flourishing handloom industry and folk art called Theyyam. Theyyam is a ritualistic artform encompassing dance, music where the artist dons the guise of God.
                </p1>
                        <a href="kannurview.php" class="button">Kannur</a>
                    </div>
                    <div class="card card8">
                    <p1>The northernmost district of Kerala and is 293 kilometre long coastline. Is home to the largest and best preserved fort in the State - Bekal. Kasaragod is world renowned for its coir and handloom industries.
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
