<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/steper.css">
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
     <div class="head"> <i class="fa fa-star"> </i>&nbsp;<a href="index.html" style="text-decoration: none;  color: #42526e;"> <li>home</li></div></a>
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
    <main>
        <div class="stepper">
          <div class="step--1 step-active"> 1</div>
          <div class="step--2"> 2</div>
          <div class="step--3"> 3</div>
          <div class="step--4">4</div>
        </div>
        <form class="form form-active">
          <div class="form--header-container">
            <h1 class="form--header-title">
              Personal Information
            </h1>
      
          
          </div>
          <label for="">full name</label><br>
          <input type="text" name="name" placeholder="Enter your full name"><br>
          <label for="">phone number</label><br>
          <input type="text" name="phone" placeholder="Enter your phone"><br>
          <label for="">Address</label><br>
          <input type="text" name="adderss" placeholder="Enter your address">
          <button class="form__btn" id="btn-1">Next</button>
        </form>
        <form class="form">
          <div class="form--header-container">
            <h1 class="form--header-title">
              Payment mathod
            </h1>
      
           
          </div>
      <div class="radio">
          <input type="radio" name="payment" id=""><label for="">paypal</label><br>
                      <input type="radio" name="payment" id=""> <label for="">SRC payment</label><br>
                      <input type="radio" name="payment" id=""> <label for="">VISA</label><br>
                      <input type="radio" name="payment" id=""> <label for="">MASTER card</label><br>
                      </div>
                      <label for="">Quantity</label><br>
                      <input class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="1" type="number" style="margin: 10px;"><br>
          <button class="form__btn" id="btn-2-prev">Previous</button>
          <button class="form__btn" id="btn-2-next">Next</button>
        </form>
        <form class="form">
          <div class="form--header-container">
            <h1 class="form--header-title">
              Confirm buying process
            </h1>
      
    
          </div>
          <input type="text" placeholder="price" />
          <input type="text" placeholder="message" />
          <button class="form__btn" id="btn-2-prev">Previous</button>

          <button class="form__btn" id="btn-3">Submit</button>
        </form>
        <div class="form--message"></div>
      </main>
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
      <script src="js/steper.js"></script>
</body>
</html>