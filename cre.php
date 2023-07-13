<?php
session_start();
if(isset($_SESSION['name']))
{
$aa=$_POST['pub'];
$bb=$_SESSION['name'];
$cc=$_SESSION['email'];
$dd=$_SESSION['password'];
if($aa=="")
{
    echo "Fill All<br>";
    echo "<a href='first.php'>Go Back</a>";

}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("blogs");
    $query="SELECT * FROM people WHERE password='$dd' AND email='$cc'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count!=0)
    {
        $query1="INSERT INTO post VALUES('$aa','$bb','$cc')";
        mysql_query($query1);
        header("location:first.php");
    }
    else {
       
        header("location:not.php");
    }
}
}
else 
{
    echo"sessionexpired";
}
?>