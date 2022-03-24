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
     <div class="head"> <i class="fa fa-star"> </i>&nbsp; <a href="index.html" style="text-decoration: none;  color: #42526e;"> <li>home</li></a></div>
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
  <section class="deltails">
    <form  class="form-basket"
    action="checkout.html">
      <p class="note">NOTE: we will add this electronic book to basket <a href="">read more</a></p>
<button class="btnb">ADD TO Basket <i class=""></i></button>
<select name="num" id="num">
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="three">3</option>
  <option value="four">4</option>
</select>
<div class="information"><i class="">guaranteed</i>
<i class="">save shopping</i>
<i class="">speed and free charging</i></div>
<hr>
<div class="buttonChoose">
  <button>Share <i class=""></i></button>
  <button>Favorite <i class=""></i></button>
  <button>Compare<i class=""></i></button>
</div>
<div class="buttonChoose2">
  <button>Share <i class=""></i></button>
  <button>Favorite <i class=""></i></button>
  <button>Compare<i class=""></i></button>
</div>

    </form>
   <div>
     <h2>Harry Botter (Electronic Book)</h2>
     <a href="">read more <i class=""></i></a>
     <p>99.99YER</p>
     <p>sale unit</p>
     <p>Return <i class="fa fa-star" style="color: yellow;"></i><i class="fa fa-star"style="color: yellow;"></i><i class="fa fa-star"style="color: yellow;"></i><i class="fa fa-star"style="color: yellow;"></i></p>
   <p class="sale">availble format:</p>
   <form action="">
     <div class="price">
       <div>
    <input type="radio" name="e-book" id=""><label for="">E-book</label><br></div>
    <div>
   <p >99.9YER</p></div>
  </div>
  <div class="price">
    <div>
    <input type="radio" name="e-book" id=""> <label for="">print Book</label></div>
    <div>
    <p>12.4YER</p>
  </div>
  </div>
   </form>
   
    </div>
    <div class="results"><p class="title1"><a href="index.html"> Home</a>
      / <a href=""> Arabic book </a>/ <a href="">Electronic book</a>/ <a href="">Harry Botter book</a> </p>
    
<div class="imgdetail">
 
<img src="images/jbb282204031.jpg" alt="">
</div>
</div>
  </section>
  <section>
    <div class="bookdetailes">
    <p>this book talking about many things of magices it is wonderful</p>
  </div>
  </section>
  <section class="detailes-section">
    <h2>Discriptions</h2>
    <div class="tabledetailes">
      <div>product number</div>
      <div>jbb1234</div>
      
    </div>
    <hr>
    <div  class="tabledetailes">
      <div>sale number</div>
      <div>4</div>
    </div>
    <hr>
    <div class="tabledetailes">
      <div>the writer</div>
      <div>Ali jaber</div>
    </div>
    <hr>
    <div class="tabledetailes">
      <div>the printer</div>
      <div>alhdara dar</div>
    </div>
    <hr>
    <div class="tabledetailes">
      <div>date</div>
      <div>2016</div>
    </div>
    <hr>
    <div class="tabledetailes">
      <div>number of page</div>
      <div>243</div>
    </div>
    <hr>
    <div class="tabledetailes">
      <div>the wieght</div>
      <div>10g</div>
    </div>
    <hr>
    <a href="">show law</a>
  </section>
  <hr style="margin: 10px;">
  <section class="section-client">
    <div class="infoclient">
<h2>Clients</h2><button><i class="fa fa-plus"></i>&nbsp;  writr here</button>
</div>
<div class="client">
  
    <div>
  <p>good</p><span>from Reem</span>
</div><div><p>12/2/2016</p></div>
</div>
<div class="client1">
  <div>
  <p>good</p><span>from Reem</span></div><div><p>12/2/2016</p></div>
</div>
<div class="client">
  <div>
  <p>good</p><span>from Reem</span></div><div><p>12/2/2016</p></div>
</div>
<a href="">Display all the clients</a>
  </section>
  <hr>
  <section class="section-product">
    <h2>Another product</h2>
    <div class="product-another">
      <div class="pro1">
      <img src="images/jbb2060ns2254.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
    </div>
    <div class="pro1">
      <img src="images/jbb2060ns2254.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
    </div>
    <div class="pro1">
      <img src="images/jbb2060ns2254.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
    </div>
    <div class="pro1">
      <img src="images/jrb2855866.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
    </div>
    <div class="pro1">
      <img src="images/jbb6260na223.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
    </div>
    <div class="pro1">
      <img src="images/jbb282204031.jpg" alt="">
      <h3>The God</h3>
      <p>99.99 YER</p>
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
</body>
</html>