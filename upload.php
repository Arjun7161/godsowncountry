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
    <title>Upload file</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
</head>
<body>
<div class="bg-upload">
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
        <br>
        <br>
        <div class="container">
    <form action="upconn.php" method="POST" enctype="multipart/form-data">
        <label for="name">Destination :</label>
        <input type="text" name="names" id="names" required value=""><br><br>
        <label for="file">File :</label>
        <input type="file" name="file"><br><br>
        <button type="submit" class="btn btn-primary" name="submit">Upload File</button>
        <br>
        <a href="savefile.php">SAVE FILE</a>
    </form>
    <br>
    
</div>
</div>
</div>
<footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>
</html>