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
        <li class="widget sbox order-receipt">
          <h2>Thank You !</h2>
          <ul >
            <li> 
			<h3>Thank You for your order.  
			<BR>
We greatly appreciate your business !</h3>
            </li>
		 <li> 
			<h4>Here is your order summery :</h4>
            </li>
            <li>
              <ul class="ordernow ">
                <li> 
                  <div class="formbox rcr-bot">
                    <ul class=""> 
                      <li><label>Order No. </label><span><?php echo $result->id?></span></li>
                      <li><label>Name  </label><span><?php echo $result->first_name." ".$result->last_name?></span></li>
                      <li><label>Email address  </label><span><?php echo $result->email?></span></li>
                      <li><label>Country </label><span><?php echo $obj->getCountryName($result->country)?></span></li>
                      <li><label>Phone number </label><span><?php echo $result->phone_number?></span></li>
                      <li><label>Topic </label><span><?php echo $result->topic?></span></li>
                      <li><label>Type of document </label><span><?php echo $obj->getValByID("doc_type",$result->doc_type)?></span></li>
                      <li><label>Urgency </label><span><?php echo $obj->getValByID("order_priorty",$result->order_priorty);?></span></li>
                      <li><label>Writer level </label><span><?php echo $obj->getValByID("writer_level",$result->writer_level)?></span></li>
                      <li><label>Spacing  </label><span><?php echo $obj->getValByID("spacing",$result->spacing)?></span></li>
                      <li><label>Number of pages </label><span><?php echo $result->page_count?></span></li>
                      <li><label>Currency </label><span><?php echo $obj->getValByID("currency",$result->currency)?></span></li>
                      <li><label>Cost per page </label><span>21.99</span></li>   
                      <li><label>Subject area </label><span><?php echo $obj->getValByID("subject_area",$result->subject_area)?></span></li>
                      <li><label>Academic level </label><span><?php echo $obj->getValByID("academic_level",$result->academic_level)?></span></li>
                      <li><label>Style  </label><span><?php echo $obj->getValByID("ordernow_style",$result->ordernow_style)?></span></li>
                      <li><label>Number of sources </label><span><?php echo $result->source_ref?></span></li>
                      <li><label>Total Cost </label><span>109.95</span></li>   

                    </ul> 
                  </div> 
                </li>
              </ul>  
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