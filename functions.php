<?php
require 'viewconn.php';

function update_get(){
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        // connection
        global $con;
        // id url to verify by te id number
        $id=$_GET['id'];
        // select all data from the get info from url id
        $get_id=mysqli_query($con, "SELECT * FROM story WHERE id='$id'");
        if(mysqli_num_rows($get_id)===1){
            $row=mysqli_fetch_assoc($get_id);
            return($row);
        }
    }
}

if(isset($_POST['update_title']) && isset($_POST['update_content'])){

    // checking if text areas are blank
    if(!empty($_POST['update_title'])  && !empty($_POST['update_content'])){

        $title=mysqli_real_escape_string($con, htmlspecialchars($_POST['update_title']));
        $content=mysqli_real_escape_string($con, htmlspecialchars($_POST['update_content']));

        $id=$_GET['id'];

        $update_query=mysqli_query($con, "UPDATE story SET title='$title',content='$content' WHERE id=$id");

        if($update_query){
            echo "<script>alert('Updated');window.location.href='delete.php';</script>";
            exit;
        }else{
            echo "<h3>Error updating</h3>";
        }

    }else{
        echo "<h4>Fill all the fields</h4>";
    }
}