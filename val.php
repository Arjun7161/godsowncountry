<?php
session_start();
$con= mysqli_connect('localhost','root','');

mysqli_select_db($con,'cmm007');
$name=$_POST['user'];
$pass=$_POST['password'];

$sq="select* from signup where name='$name'&& password ='$pass'";

$result = mysqli_query($con,$sq);

$num=mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] =$name;
    header('location:index.php');
}else{
   header('location:login.php');
}
?>