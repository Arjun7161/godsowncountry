<?php
session_start();
header('location:main.php');
$con= mysqli_connect('localhost','root','');
$errors=array();
mysqli_select_db($con,'cmm007');
$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

$sq="select * from signup where name='$name'";

$result = mysqli_query($con,$sq);

$num=mysqli_num_rows($result);

if($num == 1){
    echo"Username Already Taken";
}else{
    $conn="insert into signup(name,email,password,cpassword) values('$name','$email','$pass','$cpass')";
    mysqli_query($con,$conn);
    echo"Signed UP";
}


?>