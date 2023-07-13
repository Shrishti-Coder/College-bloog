<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      box-sizing: border-box;
      padding: 5%;
      background: linear-gradient(135deg,rgb(96, 2, 96),rgb(212, 114, 130));
    }
    
    .container {
      width: 400px;
      margin: 0 auto; 
      padding: 20px;
      padding-top:10px;
      padding-bottom: 40px;
      border: 1px solid #ccc;
      border-radius: 10px;
     background-color: aliceblue;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input,
    .form-group input[type="file"]
     {
      width: 100%;
      height: 50px;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
   
    input[type="submit"] {
      background-color: #008539;
    font-size: 15px;
    padding: 8px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
}
     
    
    a
    {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      margin-left:100px;
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
    }
    h1
    {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      padding-bottom: 25px;
      padding-left: 140px 

    }
    form
    {
      padding-bottom:20px ;
    }
  
  </style>
</head>
<body><center>
    <form action="cre.php" method="post">
    <div class="form-group">
      
      <input type="textbox" name="pub" required>
    </div>
    <div class="form-group">
  <input type="submit" value="SUBMIT"><br></div>
 

    </form>
    </center>
</body>
</html>