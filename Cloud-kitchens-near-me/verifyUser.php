<?php
$con=mysqli_connect("localhost","root","","foodorder");
$un=$_POST["UserName"];
$pwd=$_POST["Password"];
$utyp=$_POST["UserType"];
$qry="select Password from  Users_tbl where UserName='$un' and UserType='$utyp'";
$result=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($result))
{
      if ($pwd==$row['Password']) 
      {
                  echo '<script> alert("Login Successful");</script>';
                  session_start();
                  $_SESSION['UserName']=$un;
                  if ($utyp=="admin")
                        header('refresh:0;url=adminLogin.html');
                  else
                        header('refresh:0;url=dashboard.php');
      }
      else
      {
            echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
            header('refresh:0;url=dashboard.php');
      }
}     
?>