

<!DOCTYPE html>
<html>
<head>
  <title>Big Library | A_Delete</title>
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
   $b_image = $_POST[ 'image'];
   $b_isbn = $_POST['isbn'];
   $b_title = $_POST['title'];
   $b_description = $_POST[ 'description'];
   $b_author = $_POST[ 'author'];
   $b_publishDate = $_POST[ 'publish_date'];
   $b_publisher = $_POST[ 'publisher'];
   $b_type = $_POST[ 'type'];

   $sql = "INSERT INTO books (image, isbn, title, description, author, publish_date, publisher, type) VALUES ('$b_image', '$b_isbn', '$b_title', '$b_description', '$b_author', '$b_publishDate', '$b_publisher', '$b_type' )";
    if($connect->query($sql) === TRUE) {
       echo "<p>NEW BOOK SUCCESSFULLY ADDED</p>" ;
       echo "<a href='../create.php'><button type='button'>Add another book</button></a>";
        echo "<a href='../index.php'><button type='button'>Back to home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
</body>
</html>