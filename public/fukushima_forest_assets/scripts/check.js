"use strict";
function checkPhone(){
var phone = document.getElementById('userphone').value;
var cellphone = /^09[0-9]{8}$/; 

if(!(cellphone.test(phone))){
	document.getElementById('userphone').value = "" 
return document.getElementById('phone').innerHTML = '請填入正確號碼';
return false;
}    else{
	return document.getElementById('phone').innerHTML = '';
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
		return document.getElementById('mail').innerHTML = '';
	}
}

function data(){
		  var errorMsg="";
          var name = document.getElementById('username');
          var tel = document.getElementById('userphone');
          var mail = document.getElementById('usermail');

          if(name.value == ''){
            errorMsg+="name";
        }else if(tel.value == ''){
            errorMsg+="tel";
        }else if(mail.value == ''){
            errorMsg+="mail";
        }

        if(errorMsg=="name"){
            alert("請填寫姓名");
        }else if(errorMsg=="tel"){
            alert("請填寫電話");
        }else if(errorMsg=="mail"){
            alert("請填寫Email");
        }else if(errorMsg == ""){
        	document.getElementById("data").submit();
          alert("資料已送出");
        }
          
}
