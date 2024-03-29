<?php
include "includes/functions.php";
$obj=new firstClassPapers();
$sidenav=2;
if($_REQUEST['orderid']){
    $ord=base64_decode($_REQUEST['orderid']);
    $result= $obj->getOrderForm1($ord);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FirstClass Papers</title>
<?php include_once("includes/header.php"); ?>
  <div class="content mt10">
<?php include_once("includes/sidenav.php"); ?>
    <div class="content-area sbox rcr-top "><strong> </strong>
      <ul>
        <li class="widget sbox ">
          <h2>Order now</h2>
          <ul >
            <li>
              <div class="step2"></div>
            </li>
            <li>
              <ul class="ordernow order-info">
                <li>
                  <h2> Order Info</h2>
                  <div class="formbox rcr-bot">
                    <ul class="">
               
                      <li>
                        <label>Name <span>:</span></label><span><?php echo $result->first_name." ".$result->last_name?></span>
                      </li>
                       <li>
                        <label>Email address  <span>:</span></label><span><?php echo $result->email?></span>
                      </li>
                       <li>
                        <label>Country <span>:</span></label><span><?php echo $obj->getCountryName($result->country)?></span>
                      </li>
                       <li>
                        <label>Phone number <span>:</span></label><span><?php echo $result->phone_number?></span>
                      </li>
					  </ul>
					  <div class="hline"></div>
					   <ul>
                       <li>
                        <label>Topic <span>:</span></label><span><?php echo $result->topic?></span>
                      </li> 
                      <li>
                        <label>Type of document  <span>:</span></label><span><?php echo $obj->getValByID("doc_type",$result->doc_type)?></span>
                      </li>
                       <li>
                        <label>Urgency <span>:</span></label><span><?php echo $obj->getValByID("order_priorty",$result->order_priorty);?></span>
                      </li>
                       <li>
                        <label>Writer level <span>:</span></label><span><?php echo $obj->getValByID("writer_level",$result->writer_level)?></span>
                      </li>
                       <li>
                        <label>Spacing  <span>:</span></label><span><?php echo $obj->getValByID("spacing",$result->spacing)?></span>
                      </li>
                       <li>
                        <label>Number of pages <span>:</span></label><span><?php echo $result->page_count?></span>
                      </li>
                       <li>
                        <label>Currency <span>:</span></label><span><?php echo $obj->getValByID("currency",$result->currency)?></span>
                      </li>
                       <li>
                        <label>Cost per page <span>:</span></label><span>21.99 </span>                         
                      </li>
                       <li>
                        <label>Subject area <span>:</span></label><span><?php echo $obj->getValByID("subject_area",$result->subject_area)?></span>
                      </li>
                       <li>
                        <label>Academic level <span>:</span></label><span><?php echo $obj->getValByID("academic_level",$result->academic_level)?></span>
                      </li>
                       <li>
                        <label>Style  <span>:</span></label><span><?php echo $obj->getValByID("ordernow_style",$result->ordernow_style)?></span>
                      </li>
                       <li>
                        <label>Number of sources <span>:</span></label><span><?php echo $result->source_ref?></span>
                      </li>
                       <li>
                        <label>Order Description <span>:</span></label>
                        <span><?php echo $result->order_desc?></span>
                      </li> 
					   </ul>
					   <div class="hline"></div>
					   <ul class="">
                      <li>
                        <label>Discount Code <span>:</span></label><span><?php echo $result->discount_code?></span>
                      </li>
                       <li>
                        <label>  </label><span class="fco">You'll get 25% discount on your order. </span>                         
                      </li>
                      
                      
                    </ul>
                  </div> 
                </li>
              </ul><input type="button" value="Confirm Your Order" class="edit-btn" onClick="window.location='<?php echo SITEURL?>/order-now.php?orderid=<?php echo $_REQUEST['orderid']?>'">
              <input type="button" onClick="window.location='<?php echo SITEURL?>/order-now-3.php?orderid=<?php echo $_REQUEST['orderid']?>'" value="Confirm Your Order" class="proceed-to-payment-btn">
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