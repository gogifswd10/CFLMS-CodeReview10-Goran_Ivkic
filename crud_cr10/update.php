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
    <title >Big Library | Update Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">   
    <style type="text/css">

     body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
        background-image: url("./img/regal.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
}

      fieldset {
        font-size: 1.8em;
        margin: auto;
        margin-top: 100px;
        width: 50%;
        color: white;
        box-shadow: 4px 4px 18px 4px rgba(163,244,74,0.58);
}

     table tr th  {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #3F8716;
        border-radius: 5px;
        color: white;
        border: 1px solid white;
        font-size: 0.8em;
        padding: 10px 0 12px 0;
        margin: 5px;
}

    input {
        width: 600px;
        height: 42px;
        border-radius: 8px;
        opacity: 0.7;
        margin: 10px;
        text-align: center;
        font-size: 1em;
}

    button {
        font-size: 0.6em;
        width: 140px;
        height: 50px;
        border-radius: 5px;
        cursor: pointer;
}
    #btnSave {
       background-color: #a2633e;
        color: white;
    }
    #btnHome {
      background-color: #508446;
      color: white;
}

   </style>


</head>

<body>

<fieldset>
   <legend>Update Book</legend>

   <form action="actions/a_update.php" method="post">
       <table cellspacing="0" cellpadding= "0">
           <tr>
               <th>IMAGE URL</th>
               <td><input type="text" name="image" placeholder ="change image url" value="<?php echo $data['image'] ?>"/></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="number" name="isbn" placeholder="insert ISBN" value= "<?php echo $data['isbn'] ?>"/></td>
           </tr>    
           <tr>
               <th>TITLE</th>
               <td><input type="text" name= "title" placeholder="change the title of the media" value= "<?php echo $data['title'] ?>"/></td>
           </tr>
           <tr>
               <th>DESCRIPTION</th>
               <td><input type="text" name="description" placeholder ="change description" value= "<?php echo $data['description'] ?>"/></td>
           </tr>
           <tr>
               <th>AUTHOR</th>
               <td><input type="text" name="author" placeholder ="change the name of the author" value= "<?php echo $data['author'] ?>"/></td>
           </tr>
           <tr>
               <th>PUBLISH DATE</th>
               <td><input type="date" name="publish_date" value= "<?php echo $data['publish_date'] ?>"/></td>
           </tr>
           <tr>
               <th>PUBLISHER</th>
               <td><input type="text" name="publisher" placeholder ="update the publisher" value= "<?php echo $data['publisher'] ?>"/></td>
           </tr>
           <tr>
               <th>TYPE</th>
               <td><input type="text" name="type" placeholder ="change media type" value= "<?php echo $data['type'] ?>"/></td>
           </tr>

       </table><br>
              <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
              <td><button id="btnSave" type= "submit" value="<?php echo $data['id']?>" />Save Changes</button></td>
              <td><a href= "index.php"><button id="btnHome" type="button">Go to Home</button></a></td>
              
   </form>

</fieldset>

</body >
</html >

<?php
}
?>