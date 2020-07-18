
<!DOCTYPE html>
<html>
<head>
  <title>Big Library | A_Update</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet"> 
<style type="text/css">
  body {
          
          font-family: 'Quicksand', sans-serif;
          background-color: #9b7f7f;
          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }

        button {
          margin: 5px;
          font-weight: bold;
          background-color: lightgreen;
          height: 40px;
          cursor: pointer;
          border-radius: 10px;
        }

</style>
</head>
<body>
<?php

require_once 'db_connect.php';

if ($_POST) { 
    $id = $_POST['id'];  
   $b_image = $_POST['image'];
   $b_isbn = $_POST['isbn'];
   $b_title = $_POST['title'];
   $b_description = $_POST['description'];
   $b_author = $_POST[ 'author'];
   $b_publishDate = $_POST['publish_date'];
   $b_publisher = $_POST['publisher'];
   $b_type = $_POST['type'];
   

   $sql = "UPDATE books SET image = '$b_image', isbn = '$b_isbn', title = '$b_title', description = '$b_description', author = '$b_author', publish_date = '$b_publishDate', publisher = '$b_publisher', type = '$b_type' WHERE id = $id";
   if($connect->query($sql) === TRUE) {
       echo  "<h3>SUCCESSFULLY UPDATED<h3>";
       echo  "<a href='../index.php'><button type='button'>Go to home</button></a>";
       echo  "<a href='../update.php?id=" .$id."'><button type='button'>Go back to update</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>

</body>
</html>