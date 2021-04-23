<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add to Inventory</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }
            .h2 {
                background-color: blue;
                color: white;
                padding: 5px 10px; 
            }      
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
                <table  class='table-warning'>
                    <tr>
                        <th>Title</th>
                        <td><input  class ='form-control' type="text"  name="title"  placeholder ="Title" /></td>
                    </tr>   
                    <tr>
                        <th>Media Type</th>
                        <td><input class= 'form-control' type="text"  name= "type" placeholder ="Media Type" /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class= 'form-control' type="file"  name="image" /></td>
                    </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><input  class ='form-control' type="text"  name="author_fname"  placeholder ="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input  class ='form-control' type="text"  name="author_lname"  placeholder ="Author Last Name" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Number</th>
                        <td><input  class ='form-control' type="number"  name="ISBN"  placeholder ="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input  class ='form-control' type="text"  name="description"  placeholder ="Short Description" /></td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td><input  class ='form-control' type="text"  name="publish_date"  placeholder ="YY-MM-DD" /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input  class ='form-control' type="text"  name="publisher"  placeholder ="Publisher" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Adress</Address></th>
                        <td><input  class ='form-control' type="text"  name="publisher_adress"  placeholder ="Publisher Address" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Size</th>
                        <td><input  class ='form-control' type="text"  name="publisher_size"  placeholder ="Publisher Size" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input  class ='form-control' type="text"  name="status"  placeholder ="Status (available or reserved)" /></td>
                    </tr>
                    <tr>
                        <td><button class ='btn btn-success' type= "submit">Insert Media</button></td>
                        <td><a href="index.php" ><button class= 'btn btn-warning' type= "button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>