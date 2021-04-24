<?php require_once 'actions/db_connect.php';

$sql = "SELECT * FROM media where media_type='book'";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {   
    while ( $row=mysqli_fetch_assoc($result)) {
    // while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= "<tr>

     
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
           <td>" .$row['title']."</td>
           <td>".$row['aut_fname'].' '.$row['aut_lname']."</td> 
           <td>" .$row['media_type']."</td>
           <td>" .$row['description']."</td>
           <td>" .$row['isbn']."</td>
           <td>" .$row['pub_date']."</td>
           <td>" .$row['pub_name']."</td>
           <td>" .$row['pub_size']."</td>
            <td>" .$row['pub_address']."</td>
            <td>" .$row['availability']."</td>

           <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
           </tr>";
   };
} else {
   $tbody =  "<tr><td colspan='12'><center>No Data Available </center></td></tr>";
}
// echo "<pre>";
// print_r($result);
// echo "</pre>";

$connect->close();



?>

<!--       <td>" .$row['id']."</td> -->


<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
       <title>PHP CRUD</title>
       <?php require_once 'components/boot.php' ?>
       <style type= "text/css">
           .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
                height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
       </style>
        <link rel="stylesheet" href="style.css">
   </head>
   <body>
       <div class="container manageProduct w-100 mt-3" >   
       <div class='mb-3'>
       <?php require_once 'nav.php';?>

                <a href= "create.php" ><button class='btn btn-primary'type = "button" >Add product</button></a>
            </div>
           <p  class='h2'>Products</p>

            <table class='table table-striped'>
               <thead class='table-success' >
                   <tr>

                        <!-- <th>ID</th> -->
                        <th>Picture</th>
                       <th>Title</th>
                       <th>Autor</th>
                       <th>M_Type</th>
                       <th>Description</th>
                       <th>ISBN</th>
                       <th>Publish Date</th>
                        <th>Publisher</th>
                        <th>P_Type</th>
                        <th>P_address</th>
                        <th>Available</th>
                        <th>Action</th>

                   </tr>
               </thead>
               <tbody>
              
             
                   <?=$tbody;?>
               </tbody>
            </table>
       </div>
    </body>
</html >