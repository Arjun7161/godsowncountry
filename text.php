<?php
require ('function.php');
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
    <title>Story</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="bg-write">
<div class="high">
        

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="index.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li><a class="nav-link" href="upload.php">Upload Image</a></li>
                <li><a class="nav-link" href="location.php">Location</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>

    <div class="container">
<div class="row">
<div class="col pt-5">
      <h2>Insert Story</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class ="form-group">
<label for="title"> Title</label>
<input type="text" name="title" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
          <label for="content">Text Area</label>
          <textarea class="form-control" id="content" name="content" rows="10" col="30"></textarea>
      </div>
<button type="submit" class="btn btn-primary">Save Story</button>
</form>
<hr>

</div>


</div>




    </div>
</div>
</div>
<footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>
</body>
</html>