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
    <title> Admin Log In</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<body>

    <div class="bg">
<div class="high">
        

        <nav>
            <img src="Img/logo.png" class="logo">
            <a class="navbar-brand" href="index.php">God's Own Country</a>

            <ul>
            <h1>Welcome <?php echo $_SESSION['adminname']; ?></h1>
                <li><a class="nav-link" href="admin.php">Home</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>

            </ul>
        </nav>
        <!-- Admin sign up -->
        <section>
        <div class="container">
        
            <div class="row">
            <h1>Admin Sign Up</h1>
                <div class ="col-md-6">
                <form action="adminregister.php" method="post">
               
                    
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="AdminName"  placeholder=" Enter Admin Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="AdminPassword"  placeholder=" Enter Password" class="form-control" required>
                </div>
                
                <button type="submit" name="adminlog" class="btn btn-primary"> Admin Sign Up </button>
                </form>
            </div>
            </div>
        </div>
        
</div>
    </div>
    </section>
    <footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p>
    </footer>

    
</body>
</html>