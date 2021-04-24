<?php
require_once 'actions/db_connect.php';

if  ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $title = $data['title'];
        $type = $data['type'];
        $image = $data['image'];
        $author_fname = $data['author_fname'];
        $author_lname = $data['author_lname'];
        $ISBN = $data['ISBN'];
        $description = $data['description'];
        $publish_date = $data['publish_date'];
        $publisher = $data['publisher'];
        $publisher_adress = $data['publisher_adress'];
        $publisher_size = $data['publisher_size'];
        $status = $data['status'];

    } else {
        header( "location: error.php");
    }
    $connect->close();
    } else {
    header("location: error.php");
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Media</title>
        <?php require_once  'components/boot.php'?>
        <style   type= "text/css">
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
        <fieldset>
            <legend class='h2'> Update request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend >
            <form action ="actions/a_update.php"  method="post"  enctype="multipart/form-data">
                    <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input value ="<?php echo $title ?>" class ='form-control' type="text"  name="title"  placeholder ="Title" /></td>
                    </tr>   
                    <tr>
                        <th>Media Type</th>
                        <td><input value ="<?php echo $type ?>" class= 'form-control' type="text"  name= "type" placeholder ="Media Type" /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input value ="<?php echo $image ?>" class= 'form-control' type="file"  name="image" /></td>
                    </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><input value ="<?php echo $author_fname ?>" class ='form-control' type="text"  name="author_fname"  placeholder ="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input value ="<?php echo $author_lname ?>" class ='form-control' type="text"  name="author_lname"  placeholder ="Author Last Name" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Number</th>
                        <td><input value ="<?php echo $ISBN ?>" class ='form-control' type="number"  name="ISBN"  placeholder ="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input value ="<?php echo $description ?>" class ='form-control' type="text"  name="description"  placeholder ="Short Description" /></td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td><input value ="<?php echo $publish_date ?>" class ='form-control' type="text"  name="publish_date"  placeholder ="YY-MM-DD" /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input value ="<?php echo $publisher ?>" class ='form-control' type="text"  name="publisher"  placeholder ="Publisher" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Adress</Address></th>
                        <td><input value ="<?php echo $publisher_adress ?>" class ='form-control' type="text"  name="publisher_adress"  placeholder ="Publisher Address" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Size</th>
                        <td><input value ="<?php echo $publisher_size ?>"  class ='form-control' type="text"  name="publisher_size"  placeholder ="Publisher Size" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input value ="<?php echo $status ?>" class ='form-control' type="text"  name="status"  placeholder ="Status(available or reserved)" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden"  name= "id"  value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden"  name= "image"  value= "<?php echo $data['image'] ?>" />
                        <td><button class ="btn btn-success" type = "submit">Save Changes</button></td>
                        <td><a href= "index.php" ><button class ="btn btn-warning" type ="button">Back </button></a ></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html> 