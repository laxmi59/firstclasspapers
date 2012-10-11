// JavaScript Document
function isNotEmpty(fname,txt)
{
	if(fname.value=="")
	{
	alert(txt);
	fname.focus();
	return true;
	}
	return false;
}
function isNotEmpty1(fname,txt,field)
{
	if(fname.value=="")
	{
	alert(txt);
	field.focus();
	return true;
	}
	return false;
}
function spaces(reg,txt)
{
	var user=reg.value;
	if(user.match(" "))
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
	else
	{
	 	return false;
	}
}
function spaces1(reg,reg1,txt)
{
	var user=reg.value;
	if(user.match(" "))
	{
		alert(txt);
		reg.value="";
		reg1.value="";
		reg.focus();
		return true;
	}
	else
	{
	 	return false;
	}
}
function isChosen(select,txt)
{
    if (select.selectedIndex == 0)
	{
        alert(txt);
		select.focus();
        return true;
    }
        return false;
}
function pass(reg)
{
 var pass1=reg.value;
 if(pass1.length >= 6 && pass1.length <= 20)
 {
 	return false;
 }
 else
 {
    alert("pass word should be minimum six and maximum 20 letters");
	reg.value="";
	reg.focus();
	return true;
 }
 }
 function pass1(reg,txt)
{
 var pass1=reg.value;
 if(pass1.length >= 6 && pass1.length <= 20)
 {
 	return false;
 }
 else
 {
    alert(txt);
	reg.value="";
	reg.focus();
	return true;
 }
 }
function samepass(reg,reg1,txt)
 {
 	//var pass=reg.value;
	//var repass=reg1.value;
	if(reg.value==reg1.value)
	{
		return false;
	}
	else
	{
		//alert("aa");
		alert(txt);
		reg1.value="";
		reg1.focus();
		return true;
	}
 }


function userminmax(reg,txt)
{
	var user=reg.value;
	if(reg.value >0 && reg.value <32)
	{
		return false;
	}
	else
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
}
function userminmaxph(reg,txt)
{
	var user=reg.value;
	if(reg.value==10)
	{
		return false;
	}
	else
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
}
function isnumaric(reg,txt)
{
	var reg1=/^[0-9]+$/;
	if(reg.value.match(reg1))
	{
		return false;
	}
	else
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
}


function ischar(reg,txt)
{
	var reg1=/^[a-zA-Z]+$/;
	if(reg.value.match(reg1))
	{
		return false;
	}
	else
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
}
function email(reg)
{
	var e=reg.value;
	var e1=/^(?:\w+\.?)*\w+@(?:\w+\.)+\w+$/;
	if(e.match(e1))
	{
		return false;
	}
	else
	{
		alert("Enter valid Email");
		reg.value="";
		reg.focus();
		return true;
	}
}
function check(reg,txt)
{
	//alert ("cc");
	if(reg.value !=''){
		var reg1=/^[0-9]+$/;
		if(reg.value.match(reg1)){
			return false;
		}else{
			alert(txt);
			reg.value="";
			reg.focus();
			return true;
		}
	}

}
function checkresume(reg,reg1,txt)
{
	//alert("aa");
	if(reg.value=='' && reg1.value=='')
	{
		alert(txt);
		reg.focus();
		return true;
	}
	return false;
}
function isValidGender(radio,txt)
{

		for(i=0;i<radio.length;i++)
		{
			if (radio[i].checked)
            	return false;
		}
		alert(txt);
		radio[0].focus();
		return true;

}

function web(reg,txt)
{
	var e=reg.value;
	var e1=/^(http|https|www.):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(([0-9]{1,5})?\/.*)?$/
	var e2=/^(http:\/\/www.|https:\/\/www.|ftp:\/\/www.|www.|http:\/\/){1}[0-9A-Za-z\.\-]*\.[0-9A-Za-z\.\-]*$/
	if(e.match(e1)||e.match(e2))
	{
		return false;
	}
	else
	{
		alert(txt);
		reg.value="";
		reg.focus();
		return true;
	}
}
function validatecheck(chk,txt){
  if (chk.checked == 1)
   return false;
  else
    alert(txt)
    chk.focus();
	return true;
}
///////////////////////////////					Contact Information		///////////////////////////////
function contact_info(reg)
{
	if(isNotEmpty(reg.contact_name,"Name should not be empty")){return false}

	if(isNotEmpty(reg.contact_email,"Email should not be empty")){return false}

	if(email(reg.contact_email,"Invalid Email Format")){return false}

	if(isNotEmpty(reg.contact_comment,"Comments should not be empty")){return false}

}
function testimonial_info(reg){
    if(isNotEmpty(reg.name,"Name should not be empty")){return false}
    if(isNotEmpty(reg.subject,"Subject should not be empty")){return false}
    if(isNotEmpty(reg.testimonial,"Testimonials should not be empty")){return false}
}
function ordernowvalidate(reg){
    if(isNotEmpty(reg.first_name,"First Name should not be empty")){return false}
    if(isNotEmpty(reg.last_name,"Last Name should not be empty")){return false}
    if(isNotEmpty(reg.email,"Email should not be empty")){return false}
    if(email(reg.email,"Invalid Email Format")){return false}
    if(isNotEmpty(reg.remail,"Re-type Email should not be empty")){return false}
    if(email(reg.remail,"Invalid Re-type Email Format")){return false}
    if(samepass(reg.email,reg.remail,"Both Emails Must be same")){return false}
    if(isChosen(reg.country,"Select Country it should not be empty")){return false}
    if(isNotEmpty(reg.country_code,"Country code should not be empty")){return false}
    if(isNotEmpty(reg.area_code,"Area code should not be empty")){return false}
    if(isNotEmpty(reg.phnumber,"Number should not be empty")){return false}
    if(isChosen(reg.phone_type,"Select Phone type it should not be empty")){return false}

    if(isNotEmpty(reg.topic,"Topic should not be empty")){return false}
    if(isChosen(reg.page_count,"Select Number of pages/words It should not be empty")){return false}
    if(isChosen(reg.subject_area,"Select Subject Area It should not be empty")){return false}
    if(isNotEmpty(reg.order_desc,"Order Description should not be empty")){return false}
    if(isValidGender(reg.terms_conditions,"Select Terms and Conditions.")){return false}
}
function validBillingDetails(reg){
    if(isNotEmpty(reg.billing_card_number,"Card Number should not be empty")){return false}
    if(isChosen(reg.billing_exp_month,"Select Expiration month It should not be empty")){return false}
    if(isChosen(reg.billing_exp_year,"Select Expiration year It should not be empty")){return false}
    if(isNotEmpty(reg.billing_cvv,"CVV should not be empty")){return false}
    if(isNotEmpty(reg.billing_cardholder_fname,"Card holder First Name should not be empty")){return false}
    if(isNotEmpty(reg.billing_cardholder_lname,"Card holder Last Name should not be empty")){return false}
    if(isNotEmpty(reg.billing_addr,"Address should not be empty")){return false}
    if(isNotEmpty(reg.billing_city,"City should not be empty")){return false}
    if(isChosen(reg.billing_country,"Select Country It should not be empty")){return false}
    if(isChosen(reg.billing_state,"Select State It should not be empty")){return false}
    if(isNotEmpty(reg.billing_zipcode,"Zipcode should not be empty")){return false}
    if(isNotEmpty(reg.billing_phone,"Card holder Phone number should not be empty")){return false}
}
