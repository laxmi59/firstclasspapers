<?php
include "includes/functions.php";
$obj=new firstClassPapers();
$sidenav=5;
if($_POST['testimonialSubmit']){
    $msg= $obj->executeTestimonialForm($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FirstClass Papers</title>
<script type="text/javascript" src="js/valid.js"></script>
<?php include_once("includes/header.php"); ?>
  <div class="content mt10">
<?php include_once("includes/sidenav.php"); ?>

<div class="content-area sbox rcr-top "><strong> </strong>          
    <ul>
      <li class="widget sbox  ">
        <h2>Testimonials</h2>
     <div class="tst-box rcr sbox" >Coming Soon<?php /* <ul class="tst">
     
<li> <h2> Lorem Ipsum Dolor</h2> 
<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>     
<span class="name">- Mark Jukerbarg</span></li>
<li><h2> Lorem Ipsum Dolor</h2> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
   <span class="name">- Roby mooner</span></li>
      <li><h2> Lorem Ipsum Dolor</h2> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
         <span class="name">- Rob Stark</span></li>
      </ul>*/?> </div>
        <?php if(isset($msg)) echo "<div align='center'><b>$msg</b></div>"?>
        <form method="post" onSubmit="return testimonial_info(this)" >
      <ul class="form fform">
      <li> <h2> Are you a satisfied customer? Share your story.</h2>
 </li> <li><label>Name:</label>  
<input type="text" name="name" id="textfield" class="input">
 </li><br><li>
<label>Subject:</label> 
<input type="text" name="subject" id="textfield2" class="input">
 </li><br><li>
<label>Testimonial:</label> 
<textarea name="testimonial" id="textfield3" class="textarea"></textarea>
<input type="submit" name="testimonialSubmit" value="submit" class="submit-btn">
</li><br></ul></form>
           </li>  
    </ul>

  </div> 
  </div>
<?php include_once("includes/footer.php"); ?>
