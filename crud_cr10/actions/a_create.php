<!DOCTYPE html>
<html>
<head>
  <title>Big Library | A_create</title>
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
   $b_isbn = $_POST['isbn'];
   $b_title = $_POST['title'];
   $b_description = $_POST['description'];
   $b_author = $_POST['author'];
   $b_publishDate = $_POST['publish_date'];
   $b_publisher = $_POST['publisher'];
   $b_type = $_POST['type'];
   $b_image = $_POST['image'];
   // $b_fk_user_id = $_POST['users'];

   $sql = "INSERT INTO books (isbn, title, description, author, publish_date, publisher, type, image ) VALUES ($b_isbn, '$b_title', '$b_description', '$b_author', '$b_publishDate', '$b_publisher', '$b_type', '$b_image')";
    if($connect->query($sql) === TRUE) {
       echo "<p>NEW BOOK SUCCESSFULLY ADDED</p>" ;
       echo "<a href='../create.php'><button type='button'>Add another book</button></a>";
        echo "<a href='../admin.php'><button type='button'>Back to home</button></a>";
   } else  {
       echo "Error " .$connect->error;
   }

   $connect->close();
}

?>
</body>
</html>