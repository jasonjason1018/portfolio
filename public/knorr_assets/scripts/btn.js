"use strict";
      function choseQ0(no){
        document.getElementById("Q0").style.display="";
        document.getElementById("next").style.display="";
        document.getElementById("number").value = no;
      };
       function next(){
        const nameElement =document.getElementById("number");
        const number = nameElement.value;

        document.getElementById("Q0").style.display="none";
        document.getElementById("next").style.display="none";
        document.getElementById("Q"+number).style.display="";
        document.getElementById("prev").style.display="";
      }
      function prev(){
        document.getElementById("Q0").style.display="";
        document.getElementById("next").style.display="";
        document.getElementById("Q1").style.display="none";
        document.getElementById("Q2").style.display="none";
        document.getElementById("Q3").style.display="none";
        document.getElementById("Q4").style.display="none";
        document.getElementById("prev").style.display="none";
        document.getElementById("result").style.display="none";
      }
      function choseQ2(no){
        document.getElementById("result").style.display="";
        document.getElementById("Q2_number").value = no;
      }
        function submit(){
        document.getElementById("resultdata").submit();
      }
    
      
      function form(){
          var errorMsg="";
          var name = document.getElementById('ipt-name');
          var mail = document.getElementById('ipt-mail');
          var tel = document.getElementById('ipt-tel');

          if(name.value == ''){
            errorMsg+="name";
          }else if(!document.getElementById("ipt_sex_g").checked &&
            !document.getElementById("ipt_sex_b").checked){
            errorMsg+="sex";
          }else if(mail.value == ''){
            errorMsg+="mail";
          }else if(tel.value == ''){
            errorMsg+="tel";
          }else if(!document.getElementById("ipt_people-1").checked &&
            !document.getElementById("ipt_people-2").checked &&
            !document.getElementById("ipt_people-3").checked &&
            !document.getElementById("ipt_people-4").checked){
            errorMsg+="people";
          }else if(!document.getElementById("ipt_times-1").checked &&
            !document.getElementById("ipt_times-2").checked &&
            !document.getElementById("ipt_times-3").checked){
            errorMsg+="times";
          }else if(!document.getElementById("ipt_type-1").checked &&
            !document.getElementById("ipt_type-2").checked &&
            !document.getElementById("ipt_type-3").checked){
            errorMsg+="type";
          }else if(!document.getElementById("ipt_detail").checked){
            errorMsg+="detail";
          }else if(!document.getElementById("ipt_info-1").checked &&
            !document.getElementById("ipt_info-2").checked){
            errorMsg+="info";
          }
          

          if(errorMsg=="name"){
            alert("請填寫姓名");
          }else if(errorMsg=="sex"){
            alert("請勾選性別");
          }else if(errorMsg=="mail"){
            alert("請填寫Email");
          }else if(errorMsg=="tel"){
            alert("請填寫電話");
          }else if(errorMsg=="age"){
            alert("請選擇年齡");
          }else if(errorMsg=="people"){
            alert("請勾選人數");
          }else if(errorMsg=="times"){
            alert("請勾選煮飯次數");
          }else if(errorMsg=="type"){
            alert("請選擇偏好食材類型");
          }else if(errorMsg=="detail"){
            alert("請詳閱活動辦法及蒐集個人資料聲明");
          }else if(errorMsg=="info"){
            alert("請選擇是否同意接收聯合利華及其合作夥伴的市場推廣資訊");
          }else if(errorMsg==""){
            document.getElementById("form1").submit();
          }
      }







