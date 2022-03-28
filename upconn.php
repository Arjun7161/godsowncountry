<?php
$conn=mysqli_connect("localhost","root","","cmm007");
if (isset($_POST["submit"])){
    $file=$_FILES['file'];
    $name=$_POST['names'];

    $filename=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
// file extentions//
    $fileExt= explode('.',$filename);
    // extension of file
$fileActualExt= strtolower(end($fileExt));

// which ext are valid to upload//
$valid=array('pdf','docx','jpg','png','jpeg');


// to find if error while uploading where ext //
if(in_array($fileActualExt,$valid)){
    // to view if in the array the error is equal to 0 or not //
    if($fileError===0){
        // to check if the size is of the file is ok to upload//
if ($fileSize<5000000){
    // unique ext added to file for each file 
     $fileNameNew=uniqid().".".$fileActualExt;
    //  To direct the path file to be saved //
    $filepath='files/'.$fileNameNew;
    // move from tmp location to the path where the file to be saved//
    move_uploaded_file($fileTmpName,$filepath);
    $query="INSERT INTO upload VALUES ('','$name','$fileNameNew')";
    mysqli_query($conn,$query);
    echo
    "<script> alert('File Added');
    document.location.href = 'savefile.php';
    </script>";
}else{
    echo "File size not accepted";
}
    }else{
        echo "Error while uploading";
    }
}else {
    echo "Invalid file extension";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>