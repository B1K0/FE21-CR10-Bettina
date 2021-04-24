<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $author_fname = $_POST['author_fname'];
    $author_lname = $_POST['author_lname'];
    $ISBN = $_POST['ISBN'];
    $description = $_POST['description'];
    $publish_date = $_POST['publish_date'];
    $publisher = $_POST['publisher'];
    $publisher_adress = $_POST['publisher_adress'];
    $publisher_size = $_POST['publisher_size'];
    $status = $_POST['status'];
    $id = $_POST['id'];   
    //variable for upload pictures errors is initialized
    $uploadError = '';
    $image = file_upload($_FILES['image']);//function file_upload() is called  
    if($image->error===0){
        ($_POST["image"]=="default.jpeg")?: unlink("../pictures/$_POST[image]");          
        $sql = "UPDATE `library` SET `title` = '$title', `type` = '$type', `image` = '$image->fileName', 
        `author_fname` = '$author_fname', `author_lname` = '$author_lname', `ISBN` = $ISBN, `description` = '$description', `publish_date` = '$publish_date', `publisher` = '$publisher', `publisher_adress` = '$publisher_adress', `publisher_size` = '$publisher_size', `status` = '$status' WHERE id = {$id}";
    }else{
        $sql = "UPDATE `library` SET `title` = '$title', `type` = '$type', `author_fname` = '$author_fname', `author_lname` = '$author_lname', `ISBN` = $ISBN, `description` = '$description', `publish_date` = '$publish_date', `publisher` = '$publisher', `publisher_adress` = '$publisher_adress', `publisher_size` = '$publisher_size', `status` = '$status' WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE){
        $class = "success";
        $message = "Update successful";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    $connect->close();    
    } else {
    header("location: ../error.php");
    }
    ?>


<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta  charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php' ?> 
    </head>
    <body>
        <div  class="container">
            <div class="mt-3 mb-3" >
                <h1>Update request response</h1>
            </div>
                <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                    <p><?php echo ($uploadError) ?? ''; ?></p>
                    <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-success" type='button'>Back</button></a>
                    <a href='../index.php'><button class="btn btn-warning" type='button'>Home</button></a>
                </div>
        </div >
    </body>
</html>