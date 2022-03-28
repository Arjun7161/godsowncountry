<?php
require'upconn.php';
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
    <title>SaveFile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        

        <div class="navbar">
        <img src="Img/logo.png" class="logo">
        <a class="navbar-brand" href="index.php">God's Own Country</a>
        <nav>
            <ul>
            <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li><a class="nav-link" href="upload.php">Upload File</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
     <table>
         <tr>
             <td>#</td>
             <td>Name</td>
             <td>File</td>
</tr>
<?php
$i=1;
$rows= mysqli_query($conn,"SELECT * FROM upload ORDER BY id DESC");
?>
<?php foreach($rows as $row):?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><img src="files/<?php echo $row['file'];?>" width=300 alt=""></td>
    </tr>
    <?php endforeach; ?>
</table>
<footer>
        <p>Copyright CMM007 | 2022 | Gods Own Country</p> 
    </footer>
</body>
</html>