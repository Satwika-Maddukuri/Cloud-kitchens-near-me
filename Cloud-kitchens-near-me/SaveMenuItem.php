<?php
$con=mysqli_connect("localhost","root","","foodorder");
$cat=$_POST["Category"];
$ItemName=$_POST['ItemName'];
$Price=$_POST['Price'];
$Dis=$_POST['Discount'];
$ItemImg = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];   
    $folder = "image/".$ItemImg;
     

/* $ItemImg = $_FILES['uploadfile']['name'];
 $name = $_FILES['uploadfile']['tmp_name'];
 $image = base64_encode(file_get_contents(addslashes($ItemImg)));*/
    
/*$result = mysqli_query($con, "SELECT * FROM Itemimg");*/


$qry="select max(MenuItemID) as maxid from MenuItems_tbl ";
$jd=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jd=$rows[0];
      }
$qry="Insert into MenuItems_tbl values ($cat,$jd+1,'$ItemName',$Price,$Dis,'$folder')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Menu Item Added Successful");</script>';
      header('refresh:0;url=adminLogin.html');
}
else
{
      echo '<script> alert("Please try again");</script>';
      header('refresh:0;url=adminLogin.html');
}
?>