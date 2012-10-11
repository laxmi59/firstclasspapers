<?php
include "includes/functions.php";
$obj=new firstClassPapers();
$sidenav=2;
//print_r($_POST);
if($_POST['orderSubmit1']){
    $msg= $obj->executeOrderForm1($_POST);
}
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
              <div class="step1"></div>
            </li>
            <li>
                <form method="post" onSubmit="return ordernowvalidate(this)">
              <ul class="ordernow">
                <li>
                  <h2> Personal Info</h2>
                  <div class="formbox rcr">
                    <ul>
                      <li class="col2">
                        <label>First Name <span>*</span></label>
                        <input name="first_name" value="<?php echo $result->first_name?>" type="text" class="w177">
                      </li>
                      <li class="col2">
                        <label>Last Name <span>*</span></label>
                        <input name="last_name" value="<?php echo $result->last_name?>" type="text" class="w177">
                      </li>
                      <li class="col2">
                        <label>Email <span>*</span></label>
                        <input name="email" value="<?php echo $result->email?>" type="text" class="w177">
                      </li>
                      <li class="col2">
                        <label>Re-type email <span>*</span></label>
                        <input name="remail" value="<?php echo $result->email?>" type="text" class="w177">
                      </li>
                      <li>
                        <label>Country Code <span>*</span></label>
                        <?php //echo $res=$obj->getCountriesList();?>
                         <select name="country" class="w498">
                            <option value="">Select</option>
                            <?php
                            $res=$obj->getCountriesList();
                            foreach($res as $key => $val){ ?>
                            <option value="<?php echo $key;?>" <?php if($result->country == $key) echo "selected"?>><?php echo $val;?></option>
                            <?php }?>
                        </select>
                      </li>
                      <li>
                        <label>Contact Number <span>*</span></label>
                        <?php $res= $obj->splitPhoneNumber($_REQUEST['orderid']); //print_r($res);?>
                        <input name="country_code" value="<?php echo $res[0]?>" type="text" class="w89">
                        <input name="area_code" value="<?php echo $res[1]?>" type="text" class="w89 ml10">
                        <input name="phnumber" value="<?php echo $res[2]?>" type="text" class="w182 ml10">
                        <select name="phone_type" class="w105 ml10">
                          <option value="">Select</option>
                          <option value="1" <?php if($result->phone_type == 1) echo "selected"?>>Mobile</option>
                          <option value="2" <?php if($result->phone_type == 2) echo "selected"?>>Land</option>
                        </select>
                      </li>
                      <li>
                        <label>&nbsp;</label>
                        (&nbsp; country code&nbsp;)  - (   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) - (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    number                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) </li>
                      <li>
                        <label>&nbsp;</label>
                        Valid phone number where you can be reached is required.</li>
                    </ul>
                  </div>
                  <h2>Order Confirmation</h2>
                  <div class="formbox rcr">
                    <ul class="col-one">
                      <li>
                        <label>Topic : <span>*</span></label>
                        <input name="topic" value="<?php echo $result->topic?>" type="text" class="w282">
                      </li>
                      <li>
                        <label>Type of Document :</label>
                        <select name="doc_type" class="w366">
                            <option value="">Select</option>
                            <option value="1" <?php if($result->doc_type == 1) echo "selected"?>>doc1</option>
                            <option value="2" <?php if($result->doc_type == 2) echo "selected"?>>doc2</option>
                        </select>
                      </li>
                      <li>
                        <label>Urgency :</label>
                        <select name="order_priorty" class="w234">
                            <option value="">Select</option>
                            <option value="1" <?php if($result->order_priorty == 1) echo "selected"?>>Urjent</option>
                            <option value="2" <?php if($result->order_priorty == 2) echo "selected"?>>Normal</option>
                        </select>
                      </li>
                      <li>
                        <label>Writer level :</label>
                        <select name="writer_level">
                            <option value="">Select</option>
                          <option value="1" <?php if($result->writer_level == 1) echo "selected"?>>Undergraduate</option>
                        </select>
                      </li>
                      <li>
                        <label>Spacing :</label>
                        <table><tr>
                                <td><input type="radio" name="spacing" value="1" <?php if($result->spacing == 1) echo "checked"?>>Double Spaced</td>
                                <td><input type="radio" name="spacing" value="2" <?php if($result->spacing == 2) echo "checked"?>>Single Spaced</td>
                        </tr></table>
                      </li>
                      <li>
                        <label>Number of pages/words :<span>*</span></label>
                        <select name="page_count" class="w366">
                          <option>Select</option>
                          <option value="1" <?php if($result->page_count == 1) echo "selected"?>>1</option>
                          <option value="2" <?php if($result->page_count == 2) echo "selected"?>>2</option>
                        </select>
                      </li>
                      <li> ( approximately 275 words per page )</li>
                      <li>
                        <label>Currency </label>
                        <!--<span class="ml20">
                            <span class="tab-active">USD</span>
                            <span class="tab">EUR</span>
                            <span class="tab">GBP</span>
                            <span class="tab">AUD</span>
                        </span>-->
                        <table><tr>
                                <td><input type="radio" name="currency" value="1" <?php if($result->currency == 1) echo "checked"?>>USD</td>
                                <td><input type="radio" name="currency" value="2" <?php if($result->currency == 2) echo "checked"?>>EUR</td>
                                <td><input type="radio" name="currency" value="3" <?php if($result->currency == 3) echo "checked"?>>GBP</td>
                                <td><input type="radio" name="currency" value="4" <?php if($result->currency == 4) echo "checked"?>>AUD</td>
                        </tr></table>
                      </li>
                      <li>
                        <label> Cost per page :</label>
                        <span class="price2">$ 21.99</span></li>
                      <li>
                        <label>1 Page summery of your paper :</label>
                        <input name="paper_summery" type="checkbox" <?php if($result->paper_summery == 1) echo "checked"?>>
                        <span class="price">$ 26.99 </span><a href="#" class="help-icon"></a></li>
                      <li>
                        <label>Subject area :<span>*</span></label>
                        <select name="subject_area" class="w366">
                            <option value="">Select</option>
                          <option value="1" <?php if($result->subject_area == 1) echo "selected"?>>Subject1 </option>
                          <option value="2" <?php if($result->subject_area == 1) echo "selected"?>>Subject2 </option>
                        </select>
                      </li>
                      <li>
                        <label>Total </label> <span class="price2">$ 21.99 </span><a href="#" class="help-icon"></a>
                      </li>
                      <li>
                        <label>Academic level :</label>
                        <select name="academic_level" class="w133">
                          <option>Select</option>
                          <option value="1" <?php if($result->academic_level == 1) echo "selected"?>>level1</option>
                          <option value="2" <?php if($result->academic_level == 1) echo "selected"?>>level2</option>
                        </select>
                      </li>
                      <li>
                        <label>Style :</label>
                        <select name="ordernow_style" class="w133">
                            <option value="">Select</option>
                          <option value="1" <?php if($result->academic_level == 1) echo "selected"?>>APA</option>
                        </select><a href="#" class="help-icon"></a>
                      </li>
                      <li>
                        <label>Number of sources/references :</label>
                        <select name="source_ref" class="w88">
                            <option value="">Select</option>
                          <option value="1" <?php if($result->academic_level == 1) echo "selected"?>>1</option>
                          <option value="2" <?php if($result->academic_level == 1) echo "selected"?>>2</option>
                        </select> <a href="#" class="help-icon"></a>
                      </li>
                      <li>
                        <label>Order description : <span>*</span> <span class="note">(Type your instructions here)</span></label>
                        <textarea name="order_desc" cols="" rows=""  class="w422 h122"><?php echo $result->order_desc?></textarea>
                      </li>
                    </ul>
                  </div>
                  <h2>Discount</h2>
                  <div class="formbox rcr">
                    <ul class="col-one">
                      <li>
                        <label>Discount code :</label>
                        <input type="text" value="<?php echo $result->discount_code?>" name="discount_code" class="w215">
                      </li>
                      <li>
                        <label>&nbsp;</label>
                      <span class="note2">Please, be aware that membership discounts are not applied to orders under $30.00</span> </li>
                      <li>
                        <label>&nbsp;</label>
                        <input name="terms_conditions" type="radio" value="">
                        <span class="input">I accept <a href="#">Terms and Conditions</a></span> </li>
                      <li>
                        <label>&nbsp;</label>
                        <input name="terms_conditions" type="radio" value="">
                        <span class="input"> I do not accept Terms and Conditions </span></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <input type="submit" value="Confirm Your Order" name="orderSubmit1" class="confirmYourOrder">
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