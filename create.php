<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style.css?ver=<?php echo time(); ?>">


        <title>PHP CRUD  |  Add Product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>

    <div class="container manageProduct w-100 mt-3" >   
     

     <div class='mb-3'>
       <?php require_once 'nav.php' ?>

        <fieldset>
            <legend class='h2'>Add Your Media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="title" required/></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                    <!-- work later -->
                        <th>Media type</th>
                        <td>

                      
                        <select class='form-control' name="media_type" required>
                        <!-- by default always book -->
                        
                        <option value="" selected disabled>media type</option>
                        <option value="BOOK">BOOK</option>
                        <option value="CD">CD</option>
                        <option value="DVD">DVD</option>
                        
                        
                        </select>
                        </td>
                        <!-- <input class='form-control' type="text" name="media_type" placeholder="media type"/> -->
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class='form-control' type="date" name= "pub_date" placeholder="publish date" required/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="description" required/></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name= "isbn" placeholder="ISBN number" required/></td>
                    </tr>
                    <tr>
                        <th>Autor First Name</th>
                        <td><input class='form-control' type="text" name= "aut_fname" placeholder="Autor first name"required/></td>
                    </tr>
                     <tr>
                        <th>Autor Last Name</th>
                        <td><input class='form-control' type="text" name= "aut_lname" placeholder="Autor last name" required/></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pub_name" placeholder="publish name" required/></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "pub_address" placeholder="publisher Adress" required/></td>
                    </tr>
                    <tr>
                        <th>Publisher Type</th>
                        <td>
                        
                        
                        <select class='form-control' name="pub_size" id="" required>
                        <option value="" selected disabled >select type</option>
                        <!-- by default always Small -->
                        <option value="SMALL">SMALL</option>
                        <option value="MEDIUM">MEDIUM</option>
                        <option value="BIG">BIG</option>
                        
                        
                        </select>
                        
                        <!-- <input class='form-control' type="text" name= "pub_size" placeholder="publisher type"/> -->
                        
                        </td>
                    </tr>
                    <tr>
                        <th>Available</th>
                        <td><input class='form-control' type="number" name= "availability" placeholder="avialable" required/></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
        </div>
    </body>
</html>