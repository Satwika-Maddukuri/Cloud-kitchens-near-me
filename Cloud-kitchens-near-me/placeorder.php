<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="adminLogin.css">

</head>

<body>
    
    <div class="full-page">
      <div class="navbar">
        <div>
            <a href='#'>HUNGER BOUNCE</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='#'>Home</a></li>
                
            </ul>
        </nav>
      </div>
<div class="form-box" >
<form method="POST" action ="SaveBill.php">
<table  align="center">
<tr style="background-color:white;">
<th>Item ID</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Amount</th>
</tr>
<?php
session_start();
$con=mysqli_connect("localhost","root","","foodorder");
$i=1;
$tt=explode(",", substr($_SESSION['cart'],1));
foreach ($tt as $item)
{
$qry='select * from menuitems_tbl where MenuItemID='.$item;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
{
      if ($i%2==0)
      {
            echo "<tr bgcolor='#ffccff'><td>";
      }
      else
      {      
            echo "<tr bgcolor='#ff99ff'><td>";
      }
      $i++;      
      echo $rows["MenuItemID"];
      echo "</td>";
      echo "<td>";
      echo $rows["ItemName"];
      echo "</td>";
      echo "<td>";
      echo '<input type="number" name="Quantity[]" value="1" size=5 style="text-align: center;"';
      echo "</td>";
      echo "<td>";
      echo '<input type="number" name="Price[]" value="'. $rows["Price"].'" size=5 style="text-align: center;" disabled';
      echo "</td>";
      echo "<td>";
      echo $rows["Price"];
      echo "</td>";
      echo "<td>";
       
}
}      
?>
</table>
<br><br>
<centre>
<input type="submit" class="btn btn-outline-success" Value="Place Order"></button>
</centre>
</form>
</div>
</div>
</body>
</html>