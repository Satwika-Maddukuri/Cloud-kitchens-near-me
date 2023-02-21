<HTML>
    <head>
      <title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    <link rel="stylesheet" href="deleteCategory.css">
    </head>
    <body>
        
        <div class="full-page">
      <div class="navbar">
        <div>
            <a href='#'>HUNGER BOUNCE</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='index.html'>Home</a></li>
            </ul>
        </nav>
      </div>
      <br>
      <br>
 <div class="form-box" >       
<form method="POST" action="RemCat.php">
              <div class="form-group">
                  <br>
                  <br>
                  <h3><label for="exampleInputName" style="color:rgb(247, 203, 7);">Catgory ID</label></h3>
                  <br>
                   <select name="abc" class="custom-select" id="inputGroupSelect03" >
                  <option selected>Choose...</option>
                  
                  <?php
                        $con=mysqli_connect("localhost","root","","foodorder");
                        $qry="select * from menucategory_tbl";
                        $run=mysqli_query($con,$qry);
                        while ($rows=mysqli_fetch_array($run))
                        {
                              echo '<option value="'.$rows["Category"].'">'.$rows["CatDesc"].'</option>';
                        }
                  ?>
                  </select>
              </div>
              <br>
              <br>
              <button type="submit" class="submit-btn">Delete Category</button>
</form>
</div>
</div>
</body>
</HTML>