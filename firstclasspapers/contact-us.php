<?php
include "includes/functions.php";
$obj=new firstClassPapers();
$sidenav=3;
if($_POST['commentSubmit']){
    $msg= $obj->executeContactForm($_POST);
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
<div class="content-area sbox rcr-top ">
    <ul>
      <li class="widget sbox  ">
        <h2>Contact Us</h2>
        <ul class="cols mt10">
        <li class="w10">
        <li class="w170">
          <div class="name"><strong>Andrew</strong> Miller</div>
          <img src="images/andrew-pic.png" width="172" height="213">
          <div class="quote">
            <p>"Getting help is simple at First Class Papers"</p>
          </div>
        </li>

        <li class="w30"></li>
        <li class="w470">
      <p>We’re here to help you every step of the way. If you have any questions, comments, or concerns, don’t hesitate to get in touch with us via email at: info@essaywriting.com or Skype at essaywriting</p>
  <div class="phone"><span class="icon"></span><span class="txt"> Alternatively, you may <br>reach us directly at<br> this number: </span>

      <span class="no">949-204-3747 </span> <span class="dots">:</span> </div>
<div class="subtitle">If none of the above options strike your fancy, feel free to fill out the form below to send us your questions, comments, or concerns</div>
<?php if(isset($msg)) echo "<div align='center'><b>$msg</b></div>"?>
<form method="post" onSubmit="return contact_info(this)">
<ul class="form"><li><label>Name:</label>
<input type="text" name="contact_name" id="textfield" class="input">
    </li><br><li>
<label>Email:</label>
<input type="text" name="contact_email" id="textfield2" class="input">
 </li><br><li>
<label>Comment:</label>
<textarea name="contact_comment" id="textfield3" class="textarea"></textarea>
</li><br><li>
<input type="submit" name="commentSubmit" value="submit" class="submit-btn">
</li></ul></form>
        </li>
        <li class="w10"></li>
      </ul>

</li>
    </ul>
    </div>
  </div>
<?php include_once("includes/footer.php"); ?>