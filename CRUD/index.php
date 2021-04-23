<?php require_once 'actions/db_connect.php';?>
<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'</td>
           <td>" .$row['title']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['author_fname']."</td>
            <td>" .$row['author_lname']."</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['description']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['publisher']."</td>
            <td>" .$row['publisher_adress']."</td>
            <td>" .$row['publisher_size']."</td>
            <td>" .$row['status']."</td>
           <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a><br>
           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
   };
} else {
   $tbody =  "<tr><td colspan='5'><center>No Data Available</center></td></tr>";
}

$connect->close();
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>CR 10</title>
        <?php require_once 'components/boot.php' ?>
        <style type= "text/css">
            .manageMedia {          
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

            .h2 {
                background-color: blue;
                color: white;
                padding: 5px 10px; 
            }      
        </style>
    </head>
    <body>
        <div class="manageMedia w-90 mt-6" >   
            <div class='mb-3'>
            <a href= "create.php" ><button class='btn btn-success'type = "button" >Insert media</button></a>
            </div>
            <p class='h2'>Media</p>
            <table class='table table-dark table-striped table-hover table-bordered border-secondary'>
                <thead class='table-danger' >
                <tr>
                    <th>Title</th>
                    <th>Image </th>
                    <th>Type</th>
                    <th>Author First Name</th>
                    <th>Author Last Name</th>
                    <th>ISBN Number</th>
                    <th>Description</th>
                    <th>Publisher Date</th>
                    <th>Publisher</th>
                    <th>Publisher Address</th>
                    <th>Publisher Size</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html >

