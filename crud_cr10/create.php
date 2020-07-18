<html>
<head>
   <title>Big Library | Add Book</title>
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

   <style type= "text/css">
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
          padding: 15px 0 20px 0;
          background-color: #3F8716;
          border-radius: 5px;
          color: white;
          border: 1px solid white;
       }

       input {
          width: 600px;
          height: 42px;
          border-radius: 8px;
          opacity: 0.7;
          margin: 10px;
          text-align: center;
          font-size: 1.2em;
       }

       button {
          width: 140px;
          height: 50px;
          border-radius: 5px;
       }

       #btnBack {
          background-color: #5E2F22;
          color: white;
          font-size: 0.6em;
       }

       #btnAdd {
          background-color: #a2633e;
          color: white;
          font-size: 0.6em;
       }

       body {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          background-color: #b59265;
          font-family: 'Quicksand', sans-serif;
          background-image: url("img/lib.jpg");
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
    
   </style>

</head>
<body>

<fieldset>
   <legend>Add a book</legend>

   <form action="actions/a_create.php" method= "post"><br>
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>IMAGE</th>
               <td><input type="text" name="image" placeholder="Add image url" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="number" name="isbn" placeholder="Insert ISBN" /></td>
           </tr>    
           <tr>
               <th>TITLE</th>
               <td><input type="text" name= "title" placeholder="Insert the title of the media" /></td>
           </tr>
           <tr>
               <th>DESCRIPTION</th>
               <td><input type="text" name="description" placeholder ="Add a short description" /></td>
           </tr>
           <tr>
               <th>AUTHOR</th>
               <td><input type="text" name="author" placeholder ="Insert the name of the author" /></td>
           </tr>
           <tr>
               <th>PUBLISHED</th>
               <td><input type="date" name="publish_date" placeholder ="Insert publishing date" /></td>
           </tr>
           <tr>
               <th>PUBLISHER</th>
               <td><input type="text" name="publisher" placeholder ="Insert the publisher" /></td>
           </tr>
           <tr>
               <th>TYPE</th>
               <td><input type="text" name="type" placeholder ="Insert media type" /></td>
           </tr>
       </table><br> 
          <a href="index.php"><button id="btnBack" type="button">Back to home</button></a>
          <button id="btnAdd" type ="submit">Add this book</button>
   </form>

</fieldset>

</body>
</html>