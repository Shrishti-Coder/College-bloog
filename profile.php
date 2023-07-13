
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body
      {
        
      }
      .header{
        width: 99%;
    display: flex;
    height: 100px;
    padding: 10px;
    background: linear-gradient(135deg,rgb(96, 2, 96),rgb(212, 114, 130));
    color: ghostwhite;
      }
      .header a
    {
      width: 90px;
      height:15px;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
    }
      
      .header img
{
  width: 90px;
    height: 90px;

}
.pro{
  border: 0;
  width: 100%;
  padding-top: 5px;
        height:70px;
  display:flex;
}
.header h1{
font-size:70px;
margin-top:0;
margin-left:20px;
}
.con
{
  border: 0;
  width: 100%;
  padding-top: 25px;
  justify-content: flex-end;
    align-items: stretch;
        height:70px;
  display:flex;
}
.boo 
{
  background:lightblue;
  border-radius: 0;
   padding-top: 10px;
  border:0;
  margin-bottom: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
  font-size: 20px;
  width: auto;
  height:auto;
}
.boo h2 
{
 font-size: 20px;
 width: 50px;
 height:auto;
 margin-left: 10px;
  margin-bottom: 10px;
    }
    .boo hr
    {
      margin:0;
      border-color:black;
      border-bottom-width: 0px;
      
    }
    .boo p {
      font-size: 14px;
      color: #888;
      width: 300px;
      height:auto;
      margin-left: 10px;
      margin-bottom: 10px;
    }
    .prog
    {
        width: 70%;
        padding-left: 20px;
    padding-bottom: 20px;
    margin-left: 200px;
    padding-top:10px;
    margin-bottom: 20px;
    margin-top: 20px;
    height: 20px;
    background: #a75160;
    color: white;
    }
    .prog h1
    {margin-left: 45%;
        font-size:30px;
        margin-top: 0px;
    border-bottom-width: 0px;
    margin-bottom: 0px;
    }
    <?php
    $border= "2px solid";
    $borderr= "5px";
    
    ?>
    .boo a
{
  
  width: 20px;
      height:15px;
      padding: 5px;
      font-size: 10px;
      border-radius: 1px;
      margin-left: 280px;
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
}
div
{
   border: <?php echo $border; ?>;
   border-radius: <?php echo $borderr; ?>;
  
}
  </style>
</head>
<body>
   <div class="header"> 
    <div class="pro">
    <img src="fav.png" alt="error">
    <h1>SPEAKO</h1>
    
    </div>
    <div class="con">
    <a href='profile.php'>My Profile</a>
    <a href="create.php">Create Post</a>
  <a href='logout.php'>Logout</a>
   </div></div>
   <div class="prog"> 
    
    <?php
session_start();
if(isset($_SESSION['name']))
{
   
    echo"<h1>".$_SESSION['name']."</h1>";
}?>
    
    </div>
<div class="boo">
<?php

session_start();
if(isset($_SESSION['email']))
{
   

// Assuming you have established the database connection
mysql_connect("localhost","root","");
mysql_select_db("blogs");
$query1="SELECT * FROM post";
$result1=mysql_query($query1);
$book=mysql_num_rows($result1);
$m=$_SESSION['email'];
$query="SELECT * FROM post";
    $result=mysql_query($query);
    while($book=mysql_fetch_array($result))
	{
        if($m==$book['email'])
        {
   echo"<div>";
  
   echo"<h2>".$book['name']."</h2><hr>";
   echo"<p>".$book['pub']."</p>";

   echo"</div>";
  }
}
}
  ?>
	</div>
</body>
</html>

    
