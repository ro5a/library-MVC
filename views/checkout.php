<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/checkout-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>book website</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous">

    </script>
    

    
</head>
<body>
  <header>
<nav>
    <ul>
    <div class="head" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa fa-user"></i>&nbsp; <li>create account and login  </li> </div> 
    <div id="id01" class="modal">
  
      <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         
        </div>
    
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required><span class="psw"> <a href="#">forgot?</a></span>
            
          <button class="btn2" type="submit">Login</button>
          
        </div>
    
        <div class="container" style="background-color:#f1f1f1;"align="center">
          <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="cancelbtn">create account</a><br><br>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">cancel</button><br><br>
         
        </div>
      </form>
    </div>
    <!-- model of create account -->
    <div id="id02" class="modal">
      <form class="contain modal-content animate"
      action="index.html" align="center" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
       
      </div>
          <h2>create account</h2>
          <hr>
          <input class="input1" type="number" name="number" placeholder="phone number">
          <input class="country" type="numder" placeholder="code of country"><br><br>
          <label style="color: #ccc;" for="">we will send you code number by SMS message</label>
          <button>SEND CODE number</button>
          <input class="input" type="text" name="fname" placeholder="first name">
          <input class="input" type="text " name="sname" placeholder="second name">
          <input class="input" type="email" name="email" placeholder="Email">
          <input class="input" type="email" name="confirm-email" placeholder="confirm email">
          <input  class="input"type="password" name="password" placeholder="password">
          <button>Create account</button><br>
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">cancel</button><br><br>
          <span>Are you have account? <a href="index.html" style="text-decoration: none; color: #1b8bbb;">login</a></span>
      </form>
    </div>
     <div class="head"> <i class="fa fa-star"> </i>&nbsp;<a href="index.html" style="text-decoration: none;  color: #42526e;">  <li>home</li></a></div>
     <div class="head"> <i class="fa fa-truck"></i> &nbsp;<li>about us </li></div> 
    <div class="head"> <i class="fa fa-phone"> </i>&nbsp;<li>contuct us </li> </div> 
     <div class="head"><i class="fa fa-info-circle"></i> &nbsp;<li>help</li></div>  
     <div class="head"> <i class="fa fa-map-marker"></i> &nbsp;<li> terms and policeis</li></div> 
     <div class="head">  <i class=""></i>&nbsp;<li>yemen</li></div> 
     <div class="head">  <i class="fa fa-language"></i>&nbsp;<li>English</li></div>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
    </ul>
</nav>
<div class="head2">
  <div><a href="checkout.html"style="text-decoration: none;  color: #42526e;" ><i class="shop fa fa-shopping-cart"></i></a></div>
 
  <div><form class="container" action="">
    <input class="search" type="search"   name="search" placeholder="seacrh" autofocus>
    <i class=" seacrhi fa fa-search"></i>
  </form></div>
  <div><img  style="width: 150px; margin-top: 15px; margin-right: 40px;" src = "images/logo.svg" alt="My logo SVG"/></div>
  

</div>
  </header>  
    <section>
        <div class="basket-form">
            <div class="products">
        <div class="product">
            <div class="img1">
            <img src="images/jbb2060ns2254.jpg" alt=""></div>
            <div class="detail">
                <div class="one">
            <h3 >product accept for sale</h3><h3 style="color: red;">99.9 YER</h3></div>
            <p>Jarir book</p>
            <div class="numberinput">
                <div>
            <p class="note">note: here the detailes of book you can buy it! <br><a href="">how to get the product?</a></p></div><div class="quantity">
                <input type="number" min="1" max="9" step="1" value="1">
              </div>
            </div>
            <hr>
        </div>
           
            <a href="" style="color: #000;"><i class=" minus fa fa-minus"></i> Delete</a>
        </div>
        <div class="product">
            <div class="img1">
            <img src="images/jbb2060ns2254.jpg" alt=""></div>
            <div class="detail">
                <div class="one">
            <h3 >product accept for sale</h3><h3 style="color: red;">99.9 YER</h3></div>
            <p>Jarir book</p>
            <div class="numberinput">
                <div>
            <p class="note">note: here the detailes of book you can buy it! <br><a href="">how to get the product?</a></p></div><div class="quantity">
                <input type="number" min="1" max="9" step="1" value="1">
              </div>
            </div>
            <hr>
        </div>
           
            <a href="" style="color: #000;"><i class=" minus fa fa-minus"></i> Delete</a>
        </div>
        <div class="product">
            <div class="img1">
            <img src="images/jbb2060ns2254.jpg" alt=""></div>
            <div class="detail">
                <div class="one">
            <h3 >product accept for sale</h3><h3 style="color: red;">99.9 YER</h3></div>
            <p>Jarir book</p>
             <div class="numberinput">
                <div>
            <p class="note">note: here the detailes of book you can buy it! <br><a href="">how to get the product?</a></p></div><div class="quantity">
                <input type="number" min="1" max="9" step="1" value="1">
              </div>
            </div>
            <hr>
        </div>
           
            <a href="" style="color: #000;"><i class=" minus fa fa-minus"></i> Delete</a>
        </div>
        
        
    </div>
        <form action="" >
            <div class="form-buy">
                <div class="price">
            <p style="font-weight: bold; color: #000;">Total</p><p style="color: #d40b0e;font-weight: bold;">99.99YER</p></div>
            <div class="price">
            <p style="font-weight: bold;color: #000;">Charging</p><p style="color: green; font-weight: bold;">Free</p>
        </div>
        <div class="price">
            <p style="font-weight: bold;color: #000;">All total <span style="color: grey; font-size: smaller;">inclusice puondage</span></p><p style="color: #d40b0e;font-weight: bold;">99.99YER</p>
        </div>
           <div class="terms">
            <p style="color: grey; font-size: smaller;">press end shopping you accept the <br> "end shopping"<a href="">terms</a>
                </p>
            </div>
            <button><a href="steper.html" style="text-decoration: none;color: #fff;">update shopping cart</button></a>
        </div>
        </form>
    </div>
    </section>
    <footer>
        
        <div class="payment">
          <div>
            <p>terms and polices/<br>&copy All rights reserved to Jarir Bookstore
            </p>
          </div>
         
          <div>
            <i class="fa fa-cc-mastercard" style="font-size: 30px;"></i>
            <i class="fa fa-cc-discover"  style="font-size: 30px;"></i>
            <i class="fa fa-cc-visa"  style="font-size: 30px;"></i>
            <i class="fa fa-cc-paypal"  style="font-size: 30px;"></i>
          </div>
        </div>
          </footer>
</body>
</html>