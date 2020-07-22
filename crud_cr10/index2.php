<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM books WHERE id = {$id}";
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet"> 

  <style type="text/css">
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
  background-image: url("img/regal.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



.card-img-top {
  width: 20vw;
  position: relative;
  left: 8vw;
   
}


#container1 {
  position: relative;
  left: 30vw;

}

.card {
  width:40vw;
}

button {
  border-radius: 10px;
  margin: 3px;
  width: 130px;
  height: 50px;
}

.btn1 {
  background-color: #A2633E;
  color: white;
}

.btn2 {
  background-color: #508446;
  color: white;

}

.btn3 {
  background-color: #b7330e;
  color: white;

}

  </style>  
</head>
<body>
  <div class="row" id="container1">
    <!--INFO-->
    <div class="card border-dark">
        <div class='card-body'>
              <h3>Info</h3>
                        <hr>
                        <img class='card-img-top border border-dark' src ="<?php echo $data['image'] ?>" alt='Card image cap'>
                        <hr>
                        <h5 class='card-text'>ISBN:</h5><p><?php echo $data['isbn'] ?></p>
                        <h5 class='card-text'>Title:</h5><p><?php echo $data['title'] ?></p>
                        <h5 class='card-text'>Description:</h5><p><?php echo $data['description'] ?></p>
                        <h5 class='card-text'>Author:</h5><p><?php echo $data['author'] ?></p>
                        <h5 class='card-text'>Publish date:</h5><p><?php echo $data['publish_date'] ?></p>
                        <h5 class='card-text'>Publisher:</h5><p><?php echo $data['publisher'] ?></p>
                        <h5 class='card-text'>Type:</h5><p><?php echo $data['type'] ?></p>
                      
                        <hr>
                        <a href= "admin.php"><button class='btn1' type="button">Back to home</button></a>
                        <?php 
                        session_start();

                        if(isset($_SESSION["admin"])){
                        echo "<a href='update.php?id=" .$data['id']."'><button class='btn2' type='button'>Update book</button></a>
                        <a href='delete.php?id=" .$data['id']."'>
                        <button class='btn3' type='button'>Delete book</button></a>";
                        
                        };
                        ?>                        
          </div><!--END BODY-->
      </div><!--END INFO-->
  </div><!--END ROW-->
</body>
</html>
<?php
}
?>