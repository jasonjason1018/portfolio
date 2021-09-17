"use strict";
function checkPhone(){
var phone = document.getElementById('userphone').value;
var cellphone = /^09[0-9]{8}$/;

if(!(cellphone.test(phone))){
	document.getElementById('userphone').value = "" 
return document.getElementById('phone').innerHTML = '請填入正確號碼';
return false;
}    else{
	return document.getElementById('phone').innerHTML = 'ok';
	}
}

function checkMail(){
	var mail = document.getElementById('usermail').value;
	var checkmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/

	if(!checkmail.test(mail)){
		document.getElementById('usermail').value = "" 
		return document.getElementById('mail').innerHTML = '請填入正確信箱';
		return false;
	}else{
		return document.getElementById('mail').innerHTML = 'ok';
	}
}
