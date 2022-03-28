<?php
require_once 'function.php';
$row=update_get();
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
                <li><a class="nav-link" href="upload.php">Upload Image</a></li>
                <li><a class="nav-link" href="text.php">WriteStory</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
        <div class="card-header">
         Story
       </div>
       <h2 class="pt-5"><?php echo $row['title']?></h2>
       <p><?php echo htmlspecialchars_decode($row['content'])?></p></div>
</div>
</div>

</body>
</html>