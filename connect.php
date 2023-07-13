<?php
$aa=$_POST['name'];
$bb=$_POST['email'];
$cc=$_POST['contact'];
$dd=$_POST['password'];

if($aa==""||$bb==""||$cc==""||$dd=="")
{
    echo "Fill All<br>";
    echo "<a href='index.php'>Try Again</a>";

}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("blogs");
    $query="SELECT * FROM people WHERE email='$bb' AND password='$dd'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count!=0)
    {
        
        header("location:present.php");
    }
else {
$query1="INSERT INTO people VALUES('$aa','$bb','$cc','$dd')";
mysql_query($query1);
header("location:registered.php");
}
}

?>