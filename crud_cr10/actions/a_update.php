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
       echo  "<p>SUCCESSFULLY UPDATED</p>";
       echo  "<a href='../index.php'><button type='button'>Go to home</button></a>";
       echo  "<a href='../update.php?id=" .$id."'><button type='button'>Go back to update</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>