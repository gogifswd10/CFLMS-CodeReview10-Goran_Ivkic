<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">   
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #b59265;
    font-family: 'Quicksand', sans-serif;

}

table {
    width: 100%;
}

img {
    width: 200px;
    height: 270px;
    border: 1px solid silver;
}

th {
    font-size: 1.5em;
    text-align: center;
    font-weight: bold;
    padding: 5px; 

}

td {
    font-size: 1.2em;
    padding: 10px;
}

.bg-img {
    height: 450px;
    background-image: url("img/regal.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.btn {
    margin: 10px 10px;
    width: 100px;
    height: 70px;
}


#btn1 {
    background-color: #a2633e;
    color: white;

}

#btn2 {
    background-color: #b7330e;
    color: white;

}

#btn3 {
    background-color: #508446;
    color: white;

}
  </style>

</head>
<body>
    <div class="bg-img">
      <div class="container">
        
      </div>
  </div>

  <div class ="container-fluid">
    <table border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th></th>
               <th>ISBN</th>
               <th>TITLE</th>
<!--                <th>DESCRIPTION</th>
 -->               <th>AUTHOR</th>
               <!-- <th>PUBLISHING DATE</th>
               <th>PUBLISHER</th>
               <th>TYPE</th> -->
           </tr>
       </thead>
      <tbody>
           <?php

            $sql = "SELECT * FROM books";
                       $result = $connect->query($sql);

                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                               echo  "<tr>
                                         <td><img src=" .$row['image']."></td> 
                                         <td>" .$row['isbn']."</td> 
                                         <td>" .$row['title']."</td>
                                         <td>" .$row['author']."</td>
                                      <td>
                                       <a href='update.php?id=" .$row['id']."'><button type=\"button\" class=\"btn mx-auto\" id=\"btn1\">Update this book</button></a>
                                       <a href='delete.php?id=" .$row['id']."'><button type=\"button\" class=\"btn mx-auto\" id=\"btn2\">Delete this book</button></a>
                                        <a href='index2.php?id=" .$row['id']."'><button 
                                        type=\"button\" class=\"btn mx-auto\" id=\"btn3\">See details</button></a>
                                   </td>
                               </tr>" ;
                           }
                       } else  {
                           echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                       }
                       ?>
          </tbody>
        </table><br>
          <a href= "create.php"><button type="button">Add to library</button></a>
    </div>
           <!-- <td>" .$row['description']."</td>
           <td>" .$row['publish_date']."</td>
           <td>" .$row['publisher']."</td>
           <td>" .$row['type']."</td> -->

</body>
</html>


