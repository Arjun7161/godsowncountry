<?php
session_start();
$con= mysqli_connect('localhost','root','');

mysqli_select_db($con,'cmm007');
$name=$_POST['AdminName'];
$pass=$_POST['AdminPassword'];

$sq="select* from admin where Admin_Name='$name'&& Admin_Password ='$pass'";

$result = mysqli_query($con,$sq);

$num=mysqli_num_rows($result);

if($num == 1){
    $_SESSION['adminname'] =$name;
    header('location:admin.php');
}else{
   header('location:adminlogin.php');
}
?>