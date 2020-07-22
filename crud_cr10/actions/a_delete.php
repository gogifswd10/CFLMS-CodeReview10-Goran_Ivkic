

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
   $id = $_POST['id'];

   $sql = "DELETE FROM books WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h2>SUCCESSFULLY DELETED!<h2>" ;
       echo "<a href='../admin.php'><button type='button'>Back to home</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
</body>
</html>