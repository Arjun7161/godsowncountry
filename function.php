<?php
require 'viewconn.php';
function get_all_data(){
    global $con;
    $result=mysqli_query($con,"SELECT * FROM story");

    if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_assoc($result)){
         echo'
         <div class="col-md-4">
         <div class="card-header">
         Story
       </div>
         <div class="card-body">
         <h4 class=""><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['title'].'</a></h4>
         <p class="card-text">'. htmlspecialchars_decode(substr($row['content'],0,100)).'...</p>
         <div class="d-flex justify-content-between align-items-center">
         <div class="btn-group">
         <a href="single.php?id='.$row['id'].'" class="btn btn-sm btn-outline-primary" role="botton" aria-pressed="true">View</a>
         <a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-secondary" role="botton" aria-pressed="true">Edit</a>
         </div>
         </div>
         </div>
         </div>
         
         ';
     
     }
    }

    else{
       echo "<h3> No Story</h3>";
    }
}
if(isset($_POST['title']) && isset($_POST['content'])){

    // Check if empty
if(!empty($_POST['title']) && !empty($_POST['content'])){

    $title=mysqli_real_escape_string($con,htmlspecialchars($_POST['title']));
    
    $content=mysqli_real_escape_string($con,htmlspecialchars($_POST['content']));


    $check_content= mysqli_query($con,"SELECT 'title' FROM story WHERE content='$title'");

    if(mysqli_num_rows($check_content)>0){
        echo "<h3> This Title already exists</h3>";
    }else{
        $insert_query=mysqli_query($con,"INSERT INTO story (title,content) VALUES('$title','$content')");


        if($insert_query){
            echo"<script>alert('Data inserted');window.location.href ='storylist.php';</script>";
            exit;
        }else{
            echo "<h3>Data was not inserted</h3>";
        }
    }
 



}else{
    echo "<h4>Fill all the fields</h4>";
}

}

//update function to get the data

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
            echo "<script>alert('Updated');window.location.href='storylist.php';</script>";
            exit;
        }else{
            echo "<h3>Error updating</h3>";
        }

    }else{
        echo "<h4>Fill all the fields</h4>";
    }
}

// Delete function
function delete(){
    global $con;
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $userid=$_GET['id'];
        $deleted=mysqli_query($con, "DELETE FROM story WHERE id='$userid'");

        if($deleted){
            echo "<script>alert('Data deleted');window.location.href='delete.php';</script>";
            exit;
        }else{
            echo "Error while deleting";
        }
    }
}

function get_all_edit_data(){
    global $con;
    $get_data=mysqli_query($con, "SELECT * FROM story");
    if(mysqli_num_rows($get_data)>0){
        echo '<table>
        <tr>
        <th><h2>Edit Data</h2></th>
        </tr>';
        while($row=mysqli_fetch_assoc($get_data)){
            echo '<tr>
            <td>'.$row['title'].'</td>
            <td>
            <a href="adminupdate.php?id='.$row['id'].'">Edit</a>
            |
            <a href="delete.php?id='.$row['id'].'">Delete</a>
            </td>
            </tr>';
        }
        echo '</table>';
    }else{
        echo"<h3>Add story</h3>";

    }
}