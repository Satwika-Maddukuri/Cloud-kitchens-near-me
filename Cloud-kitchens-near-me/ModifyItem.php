<html>
<head>
    <title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    
    <link rel="stylesheet" href="styling.css">
</head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<body>
    
    
    <div class="full-page">
      <div class="navbar">
        <div>
            <a href='#' style="color:rgb(247, 203,0, 7);">HUNGER BOUNCE</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='index.html'>Home</a></li>
            </ul>
        </nav>
      </div>
    
<table class="table" style="background-color:rgb(247,203,0,7);">
  <thead>
    <tr style="background-color:rgb(0,0,0,3);">
<th style="color:rgb(247, 203, 7);">ID</th>
<th style="color:rgb(247, 203, 7);">Description</th>
<th style="color:rgb(247, 203, 7);">Price</th>
<th colspan=2 align="center" style="color:rgb(247, 203, 7);">ACTION</th>
</tr></thead><tbody>
<?php
$con=mysqli_connect("localhost","root","","foodorder");
$qry="select * from menuitems_tbl";
$recset=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($recset))
{
      echo "<td>";
      echo $row["MenuItemID"];
      echo "</td>";
      echo "<td>";
      echo $row["ItemName"];
       
      echo "</td>";
      echo "<td>";
      echo $row["Price"];
       
      echo "</td>";
      $ItemID=$row["MenuItemID"];
      echo "<td>";
      echo "<a href='delete.php?key=$ItemID'>DELETE</>";
      echo "</td>";
      echo "<TD><a href='modify.php?key=$ItemID'>MODIFY</>";
      echo "</td></tr>";
}      
?>
</tbody>
</table>


</div>
</body>
</html>