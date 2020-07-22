<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: indexLogin.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
Hi <?php echo $userRow['userEmail' ]; ?>
<a href="logout.php?logout">Log Out</a>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
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


/*#btn1 {
    background-color: #a2633e;
    color: white;

}

#btn2 {
    background-color: #b7330e;
    color: white;

}*/

#btn3 {
    background-color: #508446;
    color: white;
}

#add {
    width: 100%;
    background-color: #508446;
    color: white;
}  

li {
    font-size: 1.5em;
}

  </style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexLogin.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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
           require_once "actions/db_connect.php";
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
 
</body>
</html>
<?php ob_end_flush(); ?>