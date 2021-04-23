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
    $uploadError = '';
   //this function exists in the service file_upload.
    $image = file_upload($_FILES['image']);  

  

    $sql = "INSERT INTO library (title, image, type, author_fname, author_lname, ISBN, description, publish_date, publisher, publisher_adress, publisher_size, status) VALUES ('$title', '$image->fileName', '$type', '$author_fname', '$author_lname', '$ISBN', '$description', '$publish_date', '$publisher', '$publisher_adress', '$publisher_size','$status')";

if ($connect->query($sql) === true ) {
    $class = "success";
    $message = "The below entry was successfully created <br>
        <table class='table w-50'><tr>
        <td> $title </td>
        <td> $type </td>
        <td> $author_fname </td>
        <td> $author_lname </td>
        <td> $ISBN  </td>
        <td> $description  </td> 
        <td> $publisher  </td>
        <td> $publish_date </td>
        <td> $publisher_adress </td>
        <td> $publisher_size </td>
        <td> $status </td>
        </tr></table><hr>";
    $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
        <meta charset="UTF-8">
        <title>Update Inventory</title>
        <?php require_once '../components/boot.php' ?>
    </head>
    <body>
        <div  class="container">
            <div class="mt-3 mb-3" >
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-warning" type='button'>Home</button ></a>
            </div >
        </div>
    </body>
</html>