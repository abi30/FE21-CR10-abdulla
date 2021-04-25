<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $uploadError = '';
    $id = $_POST['id'];
    $picture = file_upload($_FILES['picture']);//file_upload() called  
    $title = htmlspecialchars($_POST['title']);
    $media_type = $_POST['media_type'];
    $pub_date = $_POST['pub_date'];
    $description = htmlspecialchars($_POST['description']);
    $isbn = $_POST['isbn'];
    $aut_fname = htmlspecialchars($_POST['aut_fname']);
    $aut_lname = htmlspecialchars($_POST['aut_lname']);
    $pub_name = htmlspecialchars($_POST['pub_name']);
    $pub_address = htmlspecialchars($_POST['pub_address']);
    $pub_size = $_POST['pub_size'];
    $availability = $_POST['availability'];
    //variable for upload pictures errors is initialized

    if($picture->error===0){
        
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");           
        $sql = "UPDATE media SET 
        title ='$title',
        picture = '$picture->fileName',
        media_type='$media_type',        
        pub_date = '$pub_date',
        description = '$description',
        isbn = '$isbn',
        aut_fname = '$aut_fname',
        aut_lname = '$aut_lname',
        pub_name = '$pub_name',
        pub_address = '$pub_address',
        pub_size = '$pub_size',
        availability = '$availability'
        
         WHERE id = {$id}";
    }else{
        $sql = "UPDATE media SET 
        title ='$title',
        media_type='$media_type',        
        pub_date = '$pub_date',
        description = '$description',
        isbn = '$isbn',
        aut_fname = '$aut_fname',
        aut_lname = '$aut_lname',
        pub_name = '$pub_name',
        pub_address = '$pub_address',
        pub_size = '$pub_size',
        availability = '$availability'
        
         WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $connect->close();    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>