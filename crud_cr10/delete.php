<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM books WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library | Delete Book</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

   <style type="text/css">
   	body {
          
          font-family: 'Quicksand', sans-serif;
          background-color: #9b7f7f;
          background-position: center;
          background-repeat: repeat;
          background-size: cover;
        }

        h2 {
         color: red;
        }

        button {
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
        }
   </style>
</head>
<body>

<h2>Do you really want to delete this book?</h2>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit">Yes, delete this book!</button>
   <a href="index.php"><button type="button">No, go to home!</button></a>
</form>

</body>
</html>

<?php
}
?>