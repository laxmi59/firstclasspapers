<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define("WEBSITE_NAME", "First Class Papers");
//define("SITEURL","/shekar/firstclasspapers");
define("SITEURL","");
$con=mysql_connect("localhost","firstclasspapers","K'tt&5ay1k22E^3");
//$con=mysql_connect("localhost","root","");
mysql_select_db("firstclasspapers",$con);
class firstClassPapers{
    function executeContactForm($data){
        //print_r($data);
        extract($data);
        //$sendTo1 =  "laxmi.kotni@gmail.com";
        $sendTo1 = "brad@masterinternetgroup.com,wayden@masterinternetgroup.com";
	$subject1 = "Sub : New Contact Mail from ".WEBSITE_NAME;
	$body1="<table>
	<tr><td colspan='5'>New Contact Mail from ".WEBSITE_NAME."</td></tr>
	<tr><td>Name</td><td>:</td><td>$contact_name</td></tr>
	<tr><td>Email</td><td>:</td><td>$contact_email</td></tr>
	<tr><td>Message</td><td>:</td><td>$contact_comment</td></tr>
	</table>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.WEBSITE_NAME. "\r\n";
        if(mail($sendTo1,$subject1,$body1,$headers)){
            $msg=" Your Message successfully sent";
        }
        //echo $body1;
        return $msg;
    }
    function executeTestimonialForm($data){
        extract($data);
        $ins="insert into testimonials(`name`, `subject`, `testimonial`, `date`, `status`)values('".addslashes($name)."','".addslashes($subject)."','".addslashes($testimonial)."',now(),0)";
        mysql_query($ins);
        $msg="Your Testimonial saved successfully";
        return $msg;
    }
    function executeOrderForm1($data){
        //print_r($date);
        extract($data);
        if($_REQUEST['orderid']){
            //print_r($data);exit;
            $ph=$country_code."-".$area_code."-".$phnumber;
            $upd="update orders set `first_name`='$first_name', `last_name`='$last_name', `email`='$email',
            `country`='$country', `phone_number`='$ph', `phone_type`='$phone_type', 
            `topic`='$topic', `doc_type`='$doc_type', `order_priorty`='$order_priorty', 
            `writer_level`='$writer_level', `spacing`='$spacing', `page_count`='$page_count', 
            `currency`='$currency', `paper_summery`='$paper_summery', `subject_area`='$subject_area', 
            `academic_level`='$academic_level', `ordernow_style`='$ordernow_style', `source_ref`='$source_ref', 
            `order_desc`='$order_desc', `discount_code`='$discount_code', `modified_date`=now() where id=".base64_decode($_REQUEST['orderid']);
            mysql_query($upd);
            $iid=base64_decode($_REQUEST['orderid']);

            echo "<script>location.replace('".SITEURL."/order-now-2.php?orderid=".base64_encode($iid)."')</script>";
        }else{        
            $ph=$country_code."-".$area_code."-".$phnumber;
            $ins="insert into orders
            (`first_name`, `last_name`, `email`, `country`, `phone_number`, `phone_type`, `topic`, `doc_type`, `order_priorty`, `writer_level`, `spacing`, `page_count`, `currency`, `paper_summery`, `subject_area`, `academic_level`, `ordernow_style`, `source_ref`, `order_desc`, `discount_code`, `created_date`, `modified_date`, `status`) values
            ('$first_name', '$last_name', '$email', '$country', '$ph', '$phone_type', '$topic', '$doc_type', '$order_priorty', '$writer_level', '$spacing', '$page_count', '$currency', '$paper_summery', '$subject_area', '$academic_level', '$ordernow_style', '$source_ref', '$order_desc', '$discount_code', now(), now(), '0')";
            mysql_query($ins);
            $iid=mysql_insert_id();

            echo "<script>location.replace('".SITEURL."/order-now-2.php?orderid=".base64_encode($iid)."')</script>";
        }
    }

    function getOrderForm1($id){
        $res=mysql_fetch_object(mysql_query("select * from orders where id=".$id));
        return $res;
    }
    function getValByID($col,$val){
        if($col=='order_priorty'){
            if($val==1)
                $msg = "Urjent";
            elseif($val==2)
                $msg = "Normal";
            else
                $msg = "Null";
        }
        if($col=='doc_type'){
            if($val=="")
                $msg = "Null";
            elseif($val==1)
                $msg = "doc1";
            elseif($val==2)
                $msg = "doc2";
        }
        if($col=='spacing'){
            if($val==1)
                $msg = "Double";
            elseif($val==2)
                $msg = "Single";
            else
                $msg = "Null";
        }
        if($col=='currency'){
            if($val==1)
                $msg = "USD";
            elseif($val==2)
                $msg = "EUR";
            elseif($val==3)
                $msg = "GBP";
            elseif($val==4)
                $msg = "AUD";
            else
                $msg = "Null";
        }
        if($col=='writer_level'){
            if($val==1)
                $msg ="Undergraduate";
        }
        if($col=='subject_area'){
            if($val==1)
                $msg ="subject1";
            if($val==2)
                $msg ="subject2";
        }
        if($col=='academic_level'){
            if($val==1)
                $msg ="level1";
            if($val==2)
                $msg ="level2";
        }
        if($col=='ordernow_style'){
            if($val==1)
                $msg ="APA";
        }

        return $msg;
    }
    function executeOrderForm2($data){
        //print_r($date);
        extract($data);
        $upd="update orders set `billing_exp_month`='$billing_exp_month', `billing_exp_year`='$billing_exp_year', `billing_cvv`='$billing_cvv', `billing_cardholder_fname` ='$billing_cardholder_fname', `billing_cardholder_lname` ='$billing_cardholder_lname', `billing_addr` ='$billing_addr', `billing_city` ='$billing_city', `billing_country` ='$billing_country', `billing_state` ='$billing_state', `billing_zipcode` ='$billing_zipcode', `billing_phone` ='$billing_phone' where id=".  base64_decode($_REQUEST['orderid']);
        mysql_query($upd);
        echo "<script>location.replace('".SITEURL."/order-receipt.php?orderid=".$_REQUEST['orderid']."')</script>";
    }
    function getCountriesList(){
        $sel=mysql_query("select * from countries");
        while($row=mysql_fetch_object($sel)){
            $res[$row->id] = $row->country;
        }
        //print_r($res);
        return $res;
    }
    function getCountryName($id){
        $sel=mysql_fetch_object(mysql_query("select country from countries where id=".$id));
       //print_r($res);
        return $sel->country;
    }
    function splitPhoneNumber($id){
        $id=base64_decode($id);
        $res=mysql_fetch_object(mysql_query("select phone_number from orders where id=".$id));
        $ph=explode("-",$res->phone_number);
        return $ph;
    }
}
?>
