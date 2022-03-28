<?php
require_once 'function.php';
$row=update_get();
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
    <title>Update File</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="high">
        

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="index.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['adminname']; ?> </h1>
                <li><a class="nav-link" href="admin.php">Home</a></li>
                <li><a class="nav-link" href="delete.php">Delete</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
<div class="container">
    <div class="col pt-5">
        <h2>Update Data</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $row['id'];?>" method="post">
        <div class="form-group">
            <label for="update_title">Title</label>
            <input type="text" name="update_title" class="form-control" id="update_title" placeholder="Title" value="<?php echo $row['title'];?>" required>
</div>
<div class="form-group">
    <label for="update_content">Content</label>
    <textarea class="form-control" name="update_content" id="update_content" cols="30" rows="10" value="ad" required><?php echo $row['content'];?>
</textarea>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>

</div>
</body>
</html>