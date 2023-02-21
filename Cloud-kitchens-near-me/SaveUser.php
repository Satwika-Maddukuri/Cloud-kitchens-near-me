<?php
$con=mysqli_connect("localhost","root","","foodorder");
$un=$_POST["UserName"];
$pwd=$_POST["Password"];
$phno=$_POST["ContactNo"];
$eml=$_POST["Email"];
$dadd=$_POST['DelAddress'];
$cty=$_POST['City'];
$utype="user";
$qry="Insert into users_tbl values ('$un','$pwd','$utype','$phno','$eml','$dadd','$cty')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Successful");</script>';
      header('refresh:0;url=community.html');
}
else
      echo '<script> alert("Please try again");</script>';
?>