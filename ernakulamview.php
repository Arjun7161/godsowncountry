<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:main.php');
}
require'upconn.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palakkad</title>
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
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li><a class="nav-link" href="upload.php">Upload File</a></li>
                <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
        </div>
     <table>
         <tr>
             
</tr>
<?php
$i=1;
$rows= mysqli_query($conn,"SELECT * FROM upload  WHERE name='ernakulam' ORDER BY id DESC");
?>
<?php foreach($rows as $row):?>
    <tr>
        <td><img src="files/<?php echo $row['file'];?>" width=300 alt=""></td>
    </tr>
    <?php endforeach; ?>
</table>

</div>
</div>
</body>
</html>