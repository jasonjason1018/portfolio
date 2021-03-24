"use strict";

	function limitTextAreaRows(t) { 
	    var max = 5; //最多幾行修改此處即可 
	    var cr = t.value.match(/\n/g);
		
	    if (cr && (cr.length > max-1)) { 
	    	document.getElementById('TextArea1').value = "" 
	        alert("最多" + max + "行"); 
	        t.value = t.value.replace(/\n$/,"").replace(/\r$/,""); 
	        t.focus(); 
	        return false; 
	    }
	    
	}


	function words_deal() {
    var curLength = $("#TextArea1").val().length;
    if (curLength > 30) {
        var num = $("#TextArea1").val().substr(0, 30);
        $("#TextArea1").val(num);
        alert("超過字數限制，多出的字將被移除！");
    } else {
        $("#textCount").text(30 - $("#TextArea1").val().length);
    }
} 



       function copyURL(){

             var url = location.href;
             
             alert('分享網址:'+url);
         }



		