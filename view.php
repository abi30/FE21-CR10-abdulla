 
<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
  

    $result = $connect->query($sql);
  
   

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $picture = $data['picture'];
        $title = $data['title'];
        $media_type = $data['media_type'];
        $pub_date = $data['pub_date'];
        $description = $data['description'];
        $isbn = $data['isbn'];
        $aut_fname = $data['aut_fname'];
        $aut_lname = $data['aut_lname'];
        $pub_name = $data['pub_name'];
        $pub_address = $data['pub_address'];
        $pub_size = $data['pub_size'];
        $availability = $data['availability'];

        
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once 'components/boot.php';?>
    <title>View | media</title>
    <link rel="stylesheet" href="style/style.css?ver=<?php echo time(); ?>">
  </head>
   <body>
       <div class="container manageProduct w-100 mt-3" >   
           <div class='mb-3'>
            <?php require_once 'nav.php' ?>


<div class="container">

  


   


       
       <div class="col text-center d-flex justify-content-center">
       <div class="card text-center rounded-3 m-5 " style="width: 25rem;">
       <img class="card-img-top  m-auto" src="pictures/<?php echo $picture?> ">
           <div class="card-body">
               <h5 class="card-title"> Title : <?php echo $title?> </h5>
               <h5 class="card-title"> Media type :<?php echo $media_type?> </h5>
               <h5 class="card-title"> Autor :<?php echo $aut_fname." ".$aut_lname ?> </h5>
               <p class="card-text">description: <?php echo $description?> </p>
               </div>
               <h5 class="card-title"> published :<?php echo $pub_date; ?> </h5>
               <div class="card-footer">
               
               <a class="btn btn-warning" href ="delete.php?id=<?=$id ;?>">delete</a>
               <a class="btn btn-primary" href ="update.php?id=<?=$id ;?>">update</a>
               </div>
           </div>

        </div>
      

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>