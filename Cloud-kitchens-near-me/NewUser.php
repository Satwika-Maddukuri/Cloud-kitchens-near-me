<!---<HTML>
    <head>
    <title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styling.css">
        
    </head>
  
 

<BODY>
    
    <div class="full-page">
      <div class="navbar">
        <div>
            <a href='html/login.html'>HUNGER BOUNCE</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='#'>Home</a></li>
                <li><a href="verify.html">Log In to Order</a></li>
                
               
            </ul>
        </nav>
      </div>
    
    
    
          

       
    <div class="form-boxs" >
      <form method="POST" Action="SaveUser.php">
          <br>
              <div class="form-group">
                  <label for="exampleInputName">User Name</label>
                  <input type="string" class="input-field" id="username" name="UserName" aria-describedby="emailHelp" placeholder="Enter Your Name">
                  
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="input-field" id="exampleInputPassword1" placeholder="Password" name="Password">
                  
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="input-field" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword">
                   
              </div>
             <br>
              <div class="form-group">
                  <label for="exampleInputPhone">Contact Number</label>
                  <input type="String" class="input-field" id="PhoneNo" placeholder=" Contact Number" name="ContactNo">
                   
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputemail">EmailID</label>
                  <input type="String" class="input-field" id="Email" placeholder=" Email ID" name="Email">
                   
              </div>
              <br>
               <div class="form-group">
                  <label for="exampleInputPhone">Delivery Address</label>
                  <input type="String" class="input-field" id="DelAdd" placeholder=" Delivery Adderess" name="DeliAddress">
                   
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputemail">City</label>
                  <input type="String" class="input-field" id="city" placeholder=" City" name="City">
                   
              </div>
              <br>
              <button type="submit" class="submit-btn">Submit</button>
            </form>
    </div>
    <div class="col -md-auto">
       
    </div>
  </div>
  </span>
  <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
     
      </div>
</div>
</div>
</BODY>
</HTML>
-->
<HTML>
    <head>
    <title> HUNGER BOUNCE</title>
      <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="NewUser.css">
        
    </head>
  
 

<BODY>
    
    <div class="full-page">
      <div class="navbar">
        <div>
            <a href='html/login.html'>HUNGER BOUNCE</a>
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='#'>Home</a></li>
                <li><a href="verify.html">Log In to Order</a></li>
                
               
            </ul>
        </nav>
      </div>
    
    
    
<?php
session_start();
$_SESSION['cart']="";
?>            

       
    <div class="form-boxs" >
      <form method="POST" Action="SaveUser.php">
          <br>
              <div class="form-group">
                  <label for="exampleInputName">User Name</label>
                  <input type="string" class="input-field" id="username" name="UserName" aria-describedby="emailHelp" placeholder="Enter Your Name">
                  
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="input-field" id="exampleInputPassword1" placeholder="Password" name="Password">
                  
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="input-field" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword">
                   
              </div>
             <br>
              <div class="form-group">
                  <label for="exampleInputPhone">Contact Number</label>
                  <input type="String" class="input-field" id="PhoneNo" placeholder=" Contact Number" name="ContactNo">
                   
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputemail">EmailID</label>
                  <input type="String" class="input-field" id="Email" placeholder=" Email ID" name="Email">
                   
              </div>
              <br>
               <div class="form-group">
                  <label for="exampleInputPhone">Delivery Address</label>
                  <input type="String" class="input-field" id="DelAdd" placeholder=" Delivery Adderess" name="DeliAddress">
                   
              </div>
              <br>
              <div class="form-group">
                  <label for="exampleInputemail">City</label>
                  <input type="String" class="input-field" id="city" placeholder=" City" name="City">
                   
              </div>
              <br>
              <button type="submit" class="submit-btn">Submit</button>
            </form>
    </div>
    <div class="col -md-auto">
       
    </div>
  </div>
  </span>
  <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
     
      </div>
</div>
</div>
</BODY>
</HTML>