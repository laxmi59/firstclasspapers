<?php $sidenav = 6; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FirstClass Papers</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.cycle.all.pack.js"></script>
<script type="text/javascript"> 
    jQuery(document).ready(function($){       
    
        $('#jQuery') 
        .before('<div id="navigator">') 
        .cycle({ 
            fx:     'fade', 
             timeout: 8000,
            cleartype:  1,
            pause:      1,
            pager:  '#navigator' 
        });      
		
 		$("#navigator a").each(function(i){
  	 this.id = this.id + "tab" + i; 
		});

    });        
</script>
<script type="text/javascript">
function hiddenText(iid,val,classname){
	 document.getElementById(iid).value=val;	  
}

function displayText(iid,val,classname){
	if(document.getElementById(iid).value =="")	{
		  document.getElementById(iid).value=val;
	}
}	
</script>
<!--[if lt IE 9]>
<script src="js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<div id="main">
  <header>
    <div  class="head">
      <ul>
        <li class="logo"><a href="#"></a></li>
        <li class="limited-offer"><span></span></li>
        <li class="support"><span></span></li>
      </ul>
    </div>
    <nav class="nav" role="navigation">
      <ul>
        <li><a href="#">Essay</a></li>
        <li><a href="#">Research Paper</a></li>
        <li><a href="#">Term Paper </a></li>
        <li><a href="#">Dissertation </a></li>
        <li><a href="#">Coursework </a></li>
        <li><a href="#">extras</a></li>
        <li class="social-icons"> <a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="rss"></a> </li>
      </ul>
    </nav>
  </header>
  <div class="content mt10">
    <div class="sidenav sbox rcr-top">
      <ul>
        <li class="icon one rcr-top"><a href="aboutus.html"><span></span>About Us </a></li>
        <li class="icon two"><a href="ordernow.html"><span></span>Order Now </a></li>
        <li class="icon three"><a href="contactus.html"><span></span>Contact Us </a></li>
        <li class="icon four"><a href="educationlevels.html"><span></span>Education Levels </a></li>
        <li class="icon five"><a href="testimonials.html"><span></span>Testimonials</a></li>
      </ul>
    </div>
    <div class="content-area sbox rcr-top p8">
      <ul class="cols">
        <li class="w170">
          <div class="name"><strong>Andrew</strong> Miller</div>
          <img src="images/andrew-pic.png" width="172" height="213">
          <div class="quote">
            <p>“ Lorem Ipsum Dolor Sit Amet, Lorem Ipsum Dolor Sit Amet ”</p>
          </div>
        </li>
        <li class="w15"></li>
        <li class="w228">
          <ul class="bullet  mt42">
            <li>Lorem Ipsum Dolor</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor . </li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum dolor sit</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
          </ul>
        </li>
        <li class="w25"></li>
        <li class="w236">
          <div class="member-login-frame rcr mt10">
		  <div class="member-login rcr-bot sbox">  
            <h2>Member Login</h2>
            <input value="Username or Email" type="text" class="input">
            <input value="Password" type="text" class="input">
             <a href="#" class="link">Forgot your username or password ?</a> 
            <p><input type="checkbox">
            Remember me on this computer</p>
            <input value="LOGIN" type="submit" class="login-btn rcr">
            <input value="Register" type="submit" class="register-btn rcr">
          </div>
          </div>
        </li>
      </ul>

      <ul>
	   <li class="hr15"></li>
        <li class="widget w335 sbox">
          <h2>WHY US</h2>
          <div class="cont">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </li>
        <li class="wc10"></li>
        <li class="widget w335 sbox">
          <h2>Benefits</h2>
          <div class="cont">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="checkmark">
              <li>Lorem ipsum dolor sit amet </li>
              <li>Lorem ipsum dolor </li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </li>
              <li>Lorem ipsum dolor sit </li>
            </ul>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </li>
        <li class="clr"></li>
      </ul>
    </div>
  </div>
  <div class="footer">
    <div class="top sbox">
      <ul class="links">
        <li>
          <ul>
            <li><a href="#">Home</a> </li>
            <li> <a href="educationlevels.html">Educational level</a> </li>
            <li> <a href="#">Research paper </a></li>
          </ul>
        </li>
        <li>
          <ul>
            <li><a href="aboutus.html">About Us </a></li>
            <li><a href="testimonials.html">Testimonial</a> </li>
            <li><a href="#">Term paper </a></li>
          </ul>
        </li>
        <li>
          <ul>
            <li><a href="#">Contact Us </a></li>
            <li><a href="ordernow.html">Order Now </a></li>
            <li><a href="#">Dissertation</a> </li>
          </ul>
        </li>
        <li>
          <ul>
            <li><a href="#">Coursework </a></li>
            <li><a href="#">Essay</a> </li>
            <li><a href="#">Extras</a> </li>
          </ul>
        </li>
        <li class="godaddy-secured"></li>
      </ul>
    </div>
    <div class="bottom sbox">
      <div class="you-can-reach"></div>
      <div class="topnotch"></div>
    </div>
  </div>
</div>
</div>
</body>
</html>
