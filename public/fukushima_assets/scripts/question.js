"use strict";
$(function(){$(".q:nth-child(1)").show()});

function Q1(){
	//alert($('input[name=q1]:checked').val());
		if($('input[name=q1]:checked').val()==1){
			$(function(){$(".q:nth-child(2)").show()});
			$(function(){$(".q:nth-child(1)").hide()});
		}else{
			$(function(){$(".q:nth-child(3)").show()});
			$(function(){$(".q:nth-child(1)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q2(){
		if($('input[name=q2]:checked').val()==1){
			$(function(){$(".q:nth-child(4)").show()});
			$(function(){$(".q:nth-child(2)").hide()});
		}else{
			$(function(){$(".q:nth-child(5)").show()});
			$(function(){$(".q:nth-child(2)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q3(){
		if($('input[name=q3]:checked').val()==1){
			$(function(){$(".q:nth-child(6)").show()});
			$(function(){$(".q:nth-child(3)").hide()});
		}else{
			$(function(){$(".q:nth-child(5)").show()});
			$(function(){$(".q:nth-child(3)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q4(){
		if($('input[name=q4]:checked').val()==1){
			$(function(){$(".q:nth-child(6)").show()});
			$(function(){$(".q:nth-child(4)").hide()});
		}else{
			$(function(){$(".q:nth-child(5)").show()});
			$(function(){$(".q:nth-child(4)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q5(){
		if($('input[name=q5]:checked').val()==1){
			$(function(){$(".q:nth-child(8)").show()});
			$(function(){$(".q:nth-child(5)").hide()});
		}else{
			$(function(){$(".q:nth-child(7)").show()});
			$(function(){$(".q:nth-child(5)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q6(){
		if($('input[name=q6]:checked').val()==1){
			$(function(){$(".q:nth-child(7)").show()});
			$(function(){$(".q:nth-child(6)").hide()});
		}else{
			$(function(){$(".q:nth-child(8)").show()});
			$(function(){$(".q:nth-child(6)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q7(){
		if($('input[name=q7]:checked').val()==1){
			$(location).attr('href', '/c');
		}else{
			$(function(){$(".q:nth-child(9)").show()});
			$(function(){$(".q:nth-child(7)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q8(){
		if($('input[name=q8]:checked').val()==1){
			$(location).attr('href', '/e');
		}else{
			$(function(){$(".q:nth-child(10)").show()});
			$(function(){$(".q:nth-child(8)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q9(){
		if($('input[name=q9]:checked').val()==1){
			$(location).attr('href', '/b');
		}else{
			$(function(){$(".q:nth-child(10)").show()});
			$(function(){$(".q:nth-child(9)").hide()});
		}
}
//---------------------------------------------------------------------------------------------

function Q10(){
		if($('input[name=q9]:checked').val()==1){
			$(location).attr('href', '/d');
		}else{
			$(location).attr('href', '/a');
		}
}
//---------------------------------------------------------------------------------------------

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
        }
          
}
//---------------------------------------------------------------------------------------------
/*
$(location).attr('href', '/a');
$(function(){$(".q:nth-child(1)").show()});
$(function(){$(".q:nth-child(2)").show()});
$(function(){$(".q:nth-child(3)").show()});
$(function(){$(".q:nth-child(4)").show()});
$(function(){$(".q:nth-child(5)").show()});
$(function(){$(".q:nth-child(6)").show()});
$(function(){$(".q:nth-child(7)").show()});
$(function(){$(".q:nth-child(8)").show()});
$(function(){$(".q:nth-child(9)").show()});
$(function(){$(".q:nth-child(10)").show()});*/