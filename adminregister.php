<?php
session_start();
header('location:main.php');
$con= mysqli_connect('localhost','root','');
$errors=array();
mysqli_select_db($con,'cmm007');
$name=$_POST['AdminName'];
$pass=$_POST['AdminPassword'];

$sq="select * from admin where Admin_Name='$name'";

$result = mysqli_query($con,$sq);

$num=mysqli_num_rows($result);

if($num == 1){
    echo"Admin Already Taken";
}else{
    $conn="insert into admin(Admin_Name,Admin_Password) values('$name','$pass')";
    mysqli_query($con,$conn);
    echo"Signed UP";
}


?>