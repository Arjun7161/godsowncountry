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
    <title>View Area</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
<div class="container">
    <br>
    <br>
        <h2>"God's own country" is a website that gathers reviews relating to activities and experiences of travellers from Kerala. Whether you are travelling alone to explore the culture or if it's a family vacation you're on, you can share stories and pictures of all the fascinating things you encounter on your trip. If you're planning a trip to Kerala, this is your one stop to read real reviews that would help prepare you for the unexpected. Take your time browsing through the picture archive; you will surely be awe-struck by the beauty and wonder of God's own country.</h2>

</div>
</div>
</div>

</body>
</html>