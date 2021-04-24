<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $uploadError = '';
    $title = $_POST['title'];
    $picture = file_upload($_FILES['picture']);  
    $media_type = $_POST['media_type'];
    $pub_date = $_POST['pub_date'];
    $descripiton = $_POST['description'];
    $isbn = $_POST['isbn'];
    $aut_fname = $_POST['aut_fname'];
    $aut_lname = $_POST['aut_lname'];
    $pub_name = $_POST['pub_name'];
    $pub_address = $_POST['pub_address'];
    $pub_size = $_POST['pub_size'];
    $availability = $_POST['availability'];
    //this function exists in the service file upload.
   
    $sql = "INSERT INTO media (picture,title,pub_date,media_type,description,isbn,aut_fname,aut_lname,pub_name,pub_address,pub_size,availability) VALUES ('$picture->fileName','$title','$pub_date','$media_type','$descripiton','$isbn','$aut_fname','$aut_lname','$pub_name','$pub_address','$pub_size','$availability')";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td>Article title: $title </td>
            <td>Article type: $media_type </td>
            <td>Autor: $aut_fname</td>
            <td>publish date: $pub_date </td>
           
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>