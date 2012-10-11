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
 <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34948724-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="main">
<header>
<div  class="head">
  <ul>
	<li class="logo"><a href="/"></a></li>
	<li class="limited-offer"><span></span></li>
	<li class="support"><span></span></li>
  </ul>
</div>
<nav class="nav" role="navigation">
  <ul>
	<li class="<?php if($pageid == 7) echo "active"; ?>"><a href="essay.php">Essay</a></li>
	<li class="<?php if($pageid == 2) echo "active"; ?>"><a href="research-paper.php">Research Paper</a></li>
	<li class="<?php if($pageid == 3) echo "active"; ?>"><a href="term-paper.php">Term Paper </a></li>
	<li class="<?php if($pageid == 4) echo "active"; ?>"><a href="dissertation.php">Dissertation </a></li>
	<li class="<?php if($pageid == 5) echo "active"; ?>"><a href="coursework.php">Coursework </a></li>
	<li class="<?php if($pageid == 6) echo "active"; ?>"><a href="extras.php">Extras</a></li>
	<li class="social-icons"> <a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="rss"></a> </li>
  </ul>
</nav>
<?php if($page_id == 1) { ?>
<div id="banner">
  <div id="jQuery">
	<div id="slide1" class="slide">
	  <div class="slideImage">
		<div class="defaultContent"> <img src="images/slide1.png"  alt="" /> </div>
	  </div>
	  <div class="slideContent"> 
		<h2>Why First Class Papers?</h2>
		<p><B>1) Peace of mind</B> - With us, you know what you're going to get. In a word: Quality. At First Class Papers, we get things done the right way, with the right resources.</p>
		<p><B>2) Time management</B> -The harsh truth is that writing papers is no fun and eats up most, if not all, of your valuable time; so go ahead, kick your feet up and let us do what we do best.</p>
		<p><B>3) Versatility </B> - Our team here is as versatile as can be. We can handle any and all assignments from a wide range of subjects.</p>
	  </div>
	</div>
	<div id="slide2" class="slide">
	  <div class="slideImage"> <img src="images/slide2.png"  alt="" /> </div>
	  <div class="slideContent">
		<h2>Who Can Benefit?</h2>
		<p>At First Class Papers, we believe in serving the needs of, well, anyone who has them. It doesn't matter if you are a college student with a final coming up who needs the extra study time, or a 10th grader with a ball-game to practice for. We are here for you. Wherever you are, whether it's in a lecture hall or a classroom, take a look around. Odds are, many of the people you see have used an essay writing service in the past. </p>
	  </div>
	</div>
	<div id="slide3" class="slide">
	  <div class="slideImage"> <img src="images/slide3.png"  alt="" /> </div>
	  <div class="slideContent"> 
		<h2>Is it Safe?</h2>
		<p>We believe in respecting privacy and confidentiality agreements with all of our customers, so don't worry, your information is safe with us.</p>
		<li>Under no circumstances will we release your personal information to a third party.</li>
		<li>Your payment is processed through a secure system and your billing information is never restored.</li>
		<li>Once you purchase a paper from us, it is your property, and will not be reused, republished, or shared with anyone else.</li>
	  </div>
	</div>
	<div id="slide4" class="slide">
	  <div class="slideImage"> <img src="images/slide4.png"  alt="" /> </div>
	  <div class="slideContent">
		<h2>Is it Affordable?</h2>  
		<ul><li>Overall, our prices are significantly lower than those of our competitors because we take a strong stand against price gouging.</li>
		<li>We offer numerous discounts, including, but not limited to:</li>
		<ul><li>Loyalty discounts</li>	
		<li>For a limited time, we're offering a 25% discount on all orders above $30.</li></ul></ul>
	  </div>
	</div>
	<div id="slide5" class="slide">
	  <div class="slideImage"> <img src="images/slide4.png"  alt="" /> </div>
	  <div class="slideContent">
		<h2>What Am I Guaranteed?</h2>  
		<p><B>100% Satisfaction</B> - If, upon receiving your paper, you're not completely satisfied with it (contents, layout, etc.), we will revise it free of charge until it is to your liking.</p>
		<p><B>Timely Delivery </B> - We meet deadlines. Period. With us, you don't have to worry about excuses like: "The power went out." We're professionals.</p>
		<p><B>Entirely Original Content </B> -  Our content is original and will pass any plagiarism checker</p>
	  </div>
	</div>
  </div> 
</div>
<?php } ?>
</header>