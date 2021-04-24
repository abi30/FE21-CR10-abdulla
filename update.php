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

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
       <link rel="stylesheet" href="style.css">

        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>

    <div class="container manageProduct w-100 mt-3" >   
     

     <div class='mb-3'>
       <?php require_once 'nav.php' ?>


        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>title</th>
                        <td><input class='form-control' type="text" name="title" value="<?= $title?>"  placeholder="Product Name" /></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                    <!-- work later -->
                        <th>Media type</th>
                        <td>
                     
                        <select class='form-control' name="media_type">
                        <!-- by default always book -->
                        
                        <option value="<?=$media_type?>" selected anabled><?=$media_type?></option>
                        <option value="BOOK">BOOK</option>
                        <option value="CD">CD</option>
                        <option value="DVD">DVD</option>
                        </select>
                        <!-- <input class='form-control' type="text" name="media_type" value= "<?=$media_type?>" placeholder="media type"/>
                     -->
                    
                    </td>
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class='form-control' type="date" name="pub_date" value= "<?=$pub_date?>" placeholder="publish date"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" value= "<?=$description?>" placeholder="description"/></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name="isbn" value= "<?=$isbn?>" placeholder="ISBN number"/></td>
                    </tr>
                    <tr>
                        <th>Autor First Name</th>
                        <td><input class='form-control' type="text" name="aut_fname" value= "<?=$aut_fname?>" placeholder="Autor first name"/></td>
                    </tr>
                     <tr>
                        <th>Autor Last Name</th>
                        <td><input class='form-control' type="text" name="aut_lname" value= "<?=$aut_lname?>" placeholder="Autor last name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name="pub_name" value= "<?=$pub_name?>" placeholder="publisher name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="pub_address" value= "<?=$pub_address?>" placeholder="publisher Adress"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Type</th>


                        <td>
                            

                        <select class='form-control' name="pub_size">
                        <!-- by default always book -->
                        
                        <option value="<?=$pub_size?>" selected anabled><?=$pub_size?></option>
                        <option value="SMALL">SMALL</option>
                        <option value="MEDIUM">MEDIUM</option>
                        <option value="BIG">BIG</option>
                        </select>

                        <!-- <input class='form-control' type="text" name="pub_size" value= "<?=$pub_size?>" placeholder="publisher type"/> -->
                    </td>
                    </tr>
                    <tr>
                        <th>Available</th>                  
                        <td><input class='form-control' type="number" name="availability" value="<?=$availability?>" placeholder="avialable"/></td>
                    </tr>
                        <input type= "hidden" name= "id" value= "<?=$data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?=$data['picture'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>

        </div>
        </div>
    </body>
</html>