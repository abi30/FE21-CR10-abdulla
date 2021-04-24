<?php require_once 'actions/db_connect.php';
     
$sql = "SELECT * FROM media order by id desc" ;
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {   

    
    while ( $row=mysqli_fetch_assoc($result)) {
    // while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= '
       <div class="col text-center p-2">
       <div class="card text-center w-100 h-100 rounded-3 " style="width: 18rem;">
       <img class="img-thumbnail own_pic" src="pictures/' .$row["picture"].'"/>
           <div class="card-body">
               <h5 class="card-title"> Title :' .$row["title"].' </h5>
               <h5 class="card-title"> Media type :' .$row["media_type"].' </h5>
               <h5 class="card-title"> Autor :' .$row["aut_fname"].' '.$row["aut_lname"].' </h5>
               <p class="card-text">description :' .$row["description"].'</p>
               </div>
               <h5 class="card-title"> published :' .$row["pub_name"].' </h5>
               <h6 class="card-title"> Date :' .$row["pub_date"].' </h6>
               <div class="card-footer">
               
               <a class="btn btn-warning" href ="delete.php?id='.$row["id"].'">delete</a>
               <a class="btn btn-primary" href ="update.php?id='.$row["id"].'">update</a>
               </div>
           </div>

        </div>
     
            ';
   };
} else {
   $tbody =  "<tr><td colspan='12'><center>No Data Available </center></td></tr>";
}
// echo "<pre>";
// print_r($result);
// echo "</pre>";

$connect->close();



?>




<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
       <title>PHP CRUD</title>
       <?php require_once 'components/boot.php' ?>
     
       <link rel="stylesheet" href="style/style.css?ver=<?php echo time(); ?>">
    </head>
    <body>
       <div class="container manageProduct w-100 mt-3" >   
     

           <div class='mb-3'>
       <?php require_once 'nav.php' ?>
           <p  class='h2'>All Gallery's Items</p>
       <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-3">
              
        
           
        
             
                   <?=$tbody;?>
              
         </div>
        </div>
       </div>
    </body>
</html >