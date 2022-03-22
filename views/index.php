<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
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
          <a onclick="document.getElementById('id02').style.display='block'"  class="cancelbtn">create account</a><br><br>
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
     <div class="head "> <i class="fa fa-star"> </i>&nbsp; <a href="index.html" style="text-decoration: none;  color: #42526e;"> <li>home</li></a></div>
     <div class="head"> <i class="fa fa-truck"></i> &nbsp;<li>about us </li></div> 
    <div class="head"> <i class="fa fa-phone"> </i>&nbsp;<li>contuct us </li> </div> 
     <div class="head"><i class="fa fa-info-circle"></i> &nbsp;<li>help</li></div>  
     <div class="head"> <i class="fa fa-map-marker"></i> &nbsp;<li> terms and policeis</li></div> 
     <div class="head">  <img src="images/yemen.png" width="20px" height="20px" alt="">&nbsp;&nbsp;<li>yemen &nbsp;YER</li></div> 
     <div class="head">  <i class="fa fa-language"></i>&nbsp;<li>English</li></div>
     <a href="#" class="icon" id="active" onclick="display()"> 
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
 

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number -->
  <div class="mySlides fade active">
    <div class=" numbertext">1 / 3</div>
    <img  src="images/MB-ksa-2212-formula1-cb-ar.webp" style="width:100% ;height: 350px;">
   
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/MB-ksa-1701-free-vocuhcer-arts-crafts-ar.jpg" style="width:100%;height: 350px;">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/MB-ksa-1001-b2s-2022-banners-ar1.webp" style="width:100%;height: 350px;">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

  </section>
  <section class="cat">
    
      <h2>Browse by department</h2>
      <div class="category">
      <div class="one" style="color: #1b8bbb;"> <i class="fa fa-home"></i>
        religion</div>
      <div class="two" style="color: #6db52a;"><a href="category.html"> <i class="fa fa-leanpub"></i></a> cook</div>
      <div class="three" style="color: #cb3278;"><a href="category.html"><i class="fa fa-laptop"></i></a>education</div>
      <div class="four" style="color:#f67828 ;"><a href="category.html"><i class="fa fa-home"></i></a>Policy</div>
      <div class="five" style="color: #786a9b;"><a href="category.html"><i class="fa fa-gamepad"></i></a>Economie</div>
       <div class="six" style="color: #603229;"><a href="category.html"><i class="fa fa-leanpub"></i></a>Date </div>
       <div class="seven" style="color: #ad1346;"><a href="category.html"><i class="fa fa-leanpub"></i></a>Novels</div>
    </div>
  </section>
  <section>
    <div class="shows">
      <div class="img"><img src="images/bts-home-page-ar-01.webp" alt=""></div>
      <div class="img"><img src="images/bts-home-page-ar-02.webp" alt=""></div>
      <div class="img"><img src="images/bts-home-page-ar-03.webp" alt=""></div>
      <div class="img"><img src="images/bts-home-page-ar-04.webp" alt=""></div>
    </div>
    <div class="shows2">
      <div><img src="images/bts-home-page-ar-05.webp" alt=""></div>
      <div><img src="images/bts-home-page-ar-06.webp" alt=""></div>
    </div>
  </section>
  <section>
    <h2 class="title-book">Current shows</h2>
   
    <div class="current">
     
      <div class="showbook card">
        <a href="detailes.html">  <img src="images/jbb2060ns2254.jpg" alt=""></a><br>
      <i class="fa fa-book">electronic book</i>
     <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a href="" > <i class=" fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
      <div class="showbook card">
        <a href="detailes.html"> <img src="images/jbb282204031.jpg" alt=""></a> <br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
      <p id="demo"></p>
     
    <div class="addprod">
      
      <div class="star"><i class="fa fa-star"></i></div>
      <div class="baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
     
      
      <div class="showbook card"><a href="detailes.html"><img src="images/jbb6260na223.jpg" alt=""> </a><br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
      <p id="demo1"></p>
      
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
  <div class="showbook crad"><a href="detailes.html"><img src="images/jrb2855866.jpg" alt=""></a> <br><i class="fa fa-book">electronic book</i>
    <p>Harrry Botter(electronic book)</p>
  <p>17.99YER</p>
  <p id="demo"></p>
<div class="addprod">
  <div class="star"><i class="fa fa-star"></i></div>
  <div class="baskets addtocart"><a   href="#"><i class="fa fa-cart-plus"></i></a></div>
  <div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>
<div class="showbook card"> <a href="detailes.html"><img src="images/jbb2060ns2254.jpg" alt=""></a> <br><i class="fa fa-book">electronic book</i>
  <p>Harrry Botter(electronic book)</p>
<p>17.99YER</p>
<p id="demo"></p>
<div class="addprod">
<div class="star"><i class="fa fa-star"></i></div>
<div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
<div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>

      </div>
    
  </section>
  <section>
    <h2 class="title-book">Current shows</h2>
    <div class="current">
      
      <div class="showbook card">
        <a href="detailes.html"> <img src="images/jbb2060ns2254.jpg" alt=""></a><br>
      <i class="fa fa-book">electronic book</i>
     <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
      <p id="demo"></p>
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a href="" > <i class=" fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
      <div class="showbook card">
        <a href="detailes.html">   <img src="images/jbb282204031.jpg" alt=""></a> <br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
      <p id="demo"></p>
    <div class="addprod">
      
      <div class="star"><i class="fa fa-star"></i></div>
      <div class="baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
     
      
      <div class="showbook card"><a href="detailes.html"><img src="images/jbb6260na223.jpg" alt=""> </a><br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
      <p id="demo"></p>
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
  <div class="showbook card"><a href="detailes.html"><img src="images/jrb2855866.jpg" alt=""></a> <br><i class="fa fa-book">electronic book</i>
    <p>Harrry Botter(electronic book)</p>
  <p>17.99YER</p>
  <p id="demo"></p>
<div class="addprod">
  <div class="star"><i class="fa fa-star"></i></div>
  <div class="baskets addtocart"><a   href="#"><i class="fa fa-cart-plus"></i></a></div>
  <div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>
<div class="showbook card"><a href="detailes.html"><img src="images/jbb2060ns2254.jpg" alt=""> </a><br><i class="fa fa-book">electronic book</i>
  <p>Harrry Botter(electronic book)</p>
<p>17.99YER</p>
<p id="demo"></p>
<div class="addprod">
<div class="star"><i class="fa fa-star"></i></div>
<div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
<div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>

      </div>
    
  </section>
  <section>
    <h2 class="title-book">Current shows</h2>
    <div class="current">
      
      <div class="showbook card">
        <img src="images/jbb2060ns2254.jpg" alt=""><br>
      <i class="fa fa-book">electronic book</i>
     <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a href="" > <i class=" fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
      <div class="showbook card">
        <img src="images/jbb282204031.jpg" alt=""> <br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
    <div class="addprod">
      
      <div class="star"><i class="fa fa-star"></i></div>
      <div class="baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
     
      
      <div class="showbook card"><img src="images/jbb6260na223.jpg" alt=""> <br><i class="fa fa-book">electronic book</i>
        <p>Harrry Botter(electronic book)</p>
      <p>17.99YER</p>
    <div class="addprod">
      <div class="star"><i class="fa fa-star"></i></div>
      <div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
      <div class="star"><i class="fa fa-compress"></i></div>
    </div>
  </div>
  <div class="showbook card"><img src="images/jrb2855866.jpg" alt=""> <br><i class="fa fa-book">electronic book</i>
    <p>Harrry Botter(electronic book)</p>
  <p>17.99YER</p>
<div class="addprod">
  <div class="star"><i class="fa fa-star"></i></div>
  <div class="baskets addtocart"><a   href="#"><i class="fa fa-cart-plus"></i></a></div>
  <div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>
<div class="showbook card"><img src="images/jbb2060ns2254.jpg" alt=""> <br><i class="fa fa-book">electronic book</i>
  <p>Harrry Botter(electronic book)</p>
<p>17.99YER</p>
<div class="addprod">
<div class="star"><i class="fa fa-star"></i></div>
<div class=" baskets addtocart"><a  href="#"><i class="fa fa-cart-plus"></i></a></div>
<div class="star"><i class="fa fa-compress"></i></div>
</div>
</div>

      </div>
    
  </section>
  <footer>
<div class="contuct">
  <div class="one">
    <h2>Join our newsletter</h2>
    <hr>
    <br>
    <form class="sub" action="">
      <input type="email" name="email" placeholder="Enter your email address" >
      <br><button>Participation</button>
    </form>
  </div>
  <div class="one">
    <h2>information service</h2>
    <hr>
    <br>
    <p>Corporate Sales</p>
    <p>Shopping guide and publications</p>
    <p>Exhibition sites</p>
    <p>Warranty Policy</p>
    <p>Return and exchange policy</p>
    <p>call us</p>
    <p>9200000068</p>

  </div>
  <div class="one"><h2>Jarir Services</h2>
    <hr>
    <br>
    <p>Purchase Installment Service </p>
    <p>After-sales service</p>
    <p>Comprehensive protection service</p>
    <p>Apple devices protection</p>
    <p>Jarir discount card</p>
    <p>Jarir Gift Card</p></div>
  <div class="one"><h2>Quick links</h2>
    <hr>
    <br>
    <p>Jarir Publications</p>
    <p>Jarir Reader</p>
    <p>Rewards Program Partners</p>
    <p>Telecom Partner Service</p>
    </div>
  <div class="one"><h2>from Jarir</h2>
    <hr>
    <br>
    <p>who are we</p>
    <p>the government</p>
    <p>Investor Relationship</p>
    <p>Sustainability</p>
    <p>Reports</p>
    <p>Jobs chances</p></div>
    <div class="one">
      <h2>Connect with us</h2>
      <hr>
      <br>
      <i class="fa fa-linkedin-square" style="color: rebeccapurple;font-size: 30px;"></i>
      <i class="fa fa-twitter" style="color: lightskyblue;font-size: 30px;"></i>
      <i class="fa fa-facebook-square" style="color: blue;font-size: 30px;"></i>
      <i class="fa fa-instagram" style="color: purple;font-size: 30px;"></i>
      
    </div>
</div>
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
  <script src="js/app.js"> 
    
  </script>
   <script>
    var deadline = new Date("Jan 27, 2022 15:37:25").getTime();
    var x = setInterval(function() {
    var now = new Date().getTime();
    var t = deadline - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = days + "d " 
    + hours + "h " + minutes + "m " + seconds + "s ";
        if (t < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>
     <script>
      var deadline = new Date("Jan 27, 2022 15:37:25").getTime();
      var x = setInterval(function() {
      var now = new Date().getTime();
      var t = deadline - now;
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
      var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((t % (1000 * 60)) / 1000);
      document.getElementById("demo1").innerHTML = days + "d " 
      + hours + "h " + minutes + "m " + seconds + "s ";
          if (t < 0) {
              clearInterval(x);
              document.getElementById("demo1").innerHTML = "EXPIRED";
          }
      }, 1000);
      </script>
</body>
</html>