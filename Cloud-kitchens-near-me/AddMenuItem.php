<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<head>
      <title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    
    <link rel="stylesheet" href="adminLogin.css">
    </head>

<BODY>
    
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
    <div class="form-box" >
      <form method="POST" Action="SaveMenuItem.php">
                   
                  <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                        <label for="exampleInputName" style="color:rgb(247, 203, 7);">Select a kitchen </label>
                              <select class="custom-select mr-sm-2" name="Category">
                              <option selected>Choose...</option>
                  <?php
                              $con=mysqli_connect("localhost","root","","foodorder");
                              $qry="select Category, CatDesc from MenuCategory_tbl";
                              $run=mysqli_query($con,$qry);
                              while ($rows=mysqli_fetch_array($run))
                              {
             
                                          echo "<option value=".$rows['Category'].">".$rows['CatDesc']."</option>";
             
                              }
                  ?>
                   
                   </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="exampleInputName" style="color:rgb(247, 203, 7);">Add Food Item </label>
                  <input type="string" class="form-control" id="ItemName" name="ItemName"  placeholder="New Food Item">
                   
              </div>
             <div class="form-group">
                  <label for="exampleInputName" style="color:rgb(247, 203, 7);">Price</label>
                  <input type="string" class="form-control" id="Price" name="Price"  placeholder="Price">
                   
              </div>
              <div class="form-group">
                  <label for="exampleInputName" style="color:rgb(247, 203, 7);">Discount</label>
                  <input type="string" class="form-control" id="Discount" name="Discount"  placeholder="Discount">
                   
              </div>
                  <div class="form-group">
                  <label for="exampleInputName" style="color:rgb(247, 203, 7);">Upload Item Image</label>
                  <input type="file" name="fileToUpload" id="fileToUpload">
                   
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
  </div>   
</BODY>
</HTML>