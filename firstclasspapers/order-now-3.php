<?php
include "includes/functions.php";
$obj=new firstClassPapers();
$sidenav=2;
if($_REQUEST['orderid']){
    $ord=base64_decode($_REQUEST['orderid']);
    $result= $obj->getOrderForm1($ord);
}
if($_POST['billingSubmit']){
   $msg= $obj->executeOrderForm2($_POST);
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
        <li class="widget sbox ">
          <h2>Order now</h2>
          <ul >
            <li>
              <div class="step3"></div>
            </li>
            <li>
                 <form method="post" onSubmit="return validBillingDetails(this)">
              <ul class="ordernow order-details">
                <li>
                  <h2> Order Details</h2>
                  <div class="formbox rcr-bot">
                    <ul class=""> 
                      <li><label>Topic <span>:</span></label><span><?php echo $result->topic?></span></li>
                      <li><label>Type of document  <span>:</span></label><span><?php echo $obj->getValByID("doc_type",$result->doc_type)?></span></li>
                      <li><label>Urgency <span>:</span></label><span><?php echo $obj->getValByID("order_priorty",$result->order_priorty);?></span></li>
                      <li><label>Writer level <span>:</span></label><span><?php echo $obj->getValByID("writer_level",$result->writer_level)?></span></li>
                      <li><label>Spacing  <span>:</span></label><span><?php echo $obj->getValByID("spacing",$result->spacing)?></span></li>
                      <li><label>Number of pages <span>:</span></label><span><?php echo $result->page_count?></span></li>
                      <li><label>Currency <span>:</span></label><span><?php echo $obj->getValByID("currency",$result->currency)?></span></li>
                      <li><label>Cost per page <span>:</span></label><span>21.99</span></li>  
                      <li><label>Subject area <span>:</span></label><span><?php echo $obj->getValByID("subject_area",$result->subject_area)?></span></li>
                      <li><label>Academic level <span>:</span></label><span><?php echo $obj->getValByID("academic_level",$result->academic_level)?></span></li>
                      <li><label>Style  <span>:</span></label><span><?php echo $obj->getValByID("ordernow_style",$result->ordernow_style)?></span></li>
                      <li><label>Number of sources <span>:</span></label><span><?php echo $result->source_ref?></span></li>
                      <li><label>Total Cost <span>:</span></label><span>109.95</span></li>   
                    </ul>
					<div class="hline vm0"></div>
                  </div> <div class="billing-details">
				  <h2> Billing Details</h2>
                  <div class="formbox rcr-bot">
                     
                    <ul class=""> 
                      <li><label>Card number <span>:</span></label><span><input name="billing_card_number" type="text" class="w306"><span class="credit-cards">We accept</span></span></li>
                      <li><label>Expiration date <span>:</span></label><span> 
                              <select name="billing_exp_month" class="w77">
                                  <option>Month</option>
                                  <?php for($i=1;$i<13;$i++){?>
                                  <option value="<?php echo $i?>"><?php echo $i?></option>
                                  <?php }?>
                              </select>
                              <select name="billing_exp_year" class="w77 ml30">
                                  <option>Year</option>
                                  <?php for($i=2000;$i<2012;$i++){?>
                                  <option value="<?php echo $i?>"><?php echo $i?></option>
                                  <?php }?>
                              </select>
                              <span class="cvv">CVV  :</span><input name="billing_cvv" type="text" class="w77"></span></li>
                      <li><label>Cardholder first name <span>:</span></label><span><input name="billing_cardholder_fname" type="text" class="w306"></span></li>
                      <li><label>Cardholder last name <span>:</span></label><span><input name="billing_cardholder_lname" type="text" class="w306"></span></li>
                      <li><label>Billing address <span>:</span></label><span><input name="billing_addr" type="text" class="w306"></span></li>
                      <li><label>City/Town <span>:</span></label><span><input name="billing_city" type="text" class="w306"></span></li>
                      <li><label>Country <span>:</span></label><span>
                              <select name="billing_country" class="w306">
                                  <option>Country</option>
                                   <?php
                            $res=$obj->getCountriesList();
                            foreach($res as $key => $val){ ?>
                            <option value="<?php echo $key;?>"><?php echo $val;?></option>
                            <?php }?>
                              </select></span></li>
                      <li><label>State/Province <span>:</span></label><span>
                              <select name="billing_state" class="w306">
                                  <option>State</option>
                                  <option value="ap">AP</option>
                              </select></span></li>
                      <li><label>ZIP/Postal code <span>:</span></label><span><input name="billing_zipcode" type="text" class="w306"></span></li>
                      <li><label>Cardholder phone number <span>:</span></label><span><input name="billing_phone" type="text" class="w306"></span></li>
                      <li> <p class="visa-pic">If your card is eligible or enorlled in Verified by <strong>Visa</strong> or <strong>MasterCard SecureCode</strong> payer authentication programs, your Card Issuer may prompt you for your payer authentication password after you click Submit Order</p>.</li>   
                    </ul>
                      
                  </div> </div>
                </li>
              </ul>

              <input type="submit" value="Submit Order" name="billingSubmit" class="submit-order-btn">
              </form>
            </li>
          </ul>
        </li>
        <li> </li>
      </ul>
      </li>
      </ul>
    </div>
  </div>
<?php include_once("includes/footer.php"); ?>