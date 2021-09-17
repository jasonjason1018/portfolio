
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>卡片頁</title>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/style/animate.min.css">
    <link rel="stylesheet" href="/assets/style/default.css">
    <!-- JS -->
    <script type="text/javascript" src="/assets/script/lib/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/assets/script/lib/wow.min.js"></script>
    <script type="text/javascript" src="/assets/script/lib/gsap.min.js"></script>
    <script src="/assets/script/default.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>

<body>
    <div class="main">
        <!-- header -->
        <header class="header">
            <div class="header__wrapper">
                <a href="" class="logo"></a>
            </div>

        </header>
        <!-- header End-->
        <!-- content -->
        <div class="content">
            <div class="wrapper">
                <div class="sections">

                    <section class="section-card">
                        <div class="eCard wow flipInY">
                            <div class="eCard__content">
                                <div class="text">
                                  @foreach($sno1 as $data)
                                    <div class="sendTo">Dear<span>{{$data->wish_name}}</span></div>
                                    <div class="info">
                                      {{$data->string}}
                                    </div>
                                    <div class="sendfrom">
                                        Sincerely,<span>{{$data->name}}</span>
                                    </div>                                    
                                    @endforeach
                                </div>
                                <div class="eCard__footer">
                                    <span class="logo"></span>
                                </div>
                                <div class="image"><img src="/assets/image/itemImg01.jpg" ></div>
                            </div>
                        </div>
                        <div class="btn-area wow fadeInUp"  data-wow-offset="0">
                            <button class="btn-fill" ><a href="/" style="color:white">我也要傳送祝福</a></button>
                            <button class="btn-fill"><a href="#" download="image.jpg" onclick="this.href=canvas.toDataURL();" style="color:white">下載卡片</a></button>
                            
                        </div>
                    </section>
                </div>
                <div class="footer"> <span>©2021 Škoda Auto a.s.</span> </div>
            </div>
            <!-- content End -->
        </div>


</body>

</html>
<img id="bg"src="/assets/style/img/bg-card.jpg" style="display:none">
<img id="scream" src="/assets/style/img/bg-border-card.png" style="display:none">
<img id="logo"src="/assets/style/img/logo.png" style="display:none">
<img id="item"src="/assets/image/itemImg01.jpg" style="display:none">
<img id="dec"src="/assets/style/img/dec-stemp.png" style="display:none">

@foreach($sno1 as $data)
<input type="hidden" name="name" id="name" value="{{$data->name}}">
<input type="hidden" name="wish_name" id="wish_name" value="{{$data->wish_name}}">
@php
$string=explode("\n", $data->string);
@endphp
@foreach($string as $k=>$v)
  <input type="hidden" id="{{$k}}" value="{{$v}}">
@endforeach
@endforeach
<canvas id="canvas" width="550" height="700" style="display:none"></canvas>

<script>
  var canvas = document.getElementById('canvas'),
      context = canvas.getContext('2d');
  var c = document.getElementById("canvas");
  var ctx = c.getContext("2d");
  ctx . font  =  "20px Microsoft YaHei" 

  var name = document.getElementById("name").value;
  var wish_name = document.getElementById("wish_name").value;
  
  if(document.getElementById("0")){
    var string = document.getElementById("0").value;
  }else{
    var string = " ";
  }
  
  if(document.getElementById("1")){
    var string1 = document.getElementById("1").value;
  }else{
    var string1 = " ";
  }
  
  if(document.getElementById("2")){
    var string2 = document.getElementById("2").value;
  }else{
    var string2 = " ";
  }
  if(document.getElementById("3")){
    var string3 = document.getElementById("3").value;
  }else{
    var string3 = " ";
  }

  if(document.getElementById("4")){
    var string4 = document.getElementById("4").value;
  }else{
    var string4 = " ";
  }
  let bg1 = new Image();
  bg1.onload = function () {
    ctx.drawImage(bg,26,26,468,651.5);
  };
  bg1.src = document.getElementById("bg").src;
  
  let scream1 = new Image();
  scream1.onload = setTimeout(function () {
    ctx.drawImage(scream,10,10,500,683);
  }, 300);
  scream1.src = document.getElementById("scream").src;


    let logo1 = new Image();
  logo1.onload = setTimeout(function () {
    ctx.drawImage(logo,40,325,120,26);
  }, 300);
  logo1.src = document.getElementById("logo").src;

  
    let item1 = new Image();
  item1.onload = setTimeout(function () {
    ctx.drawImage(item,40,360,440,300);
  }, 300);
  item1.src = document.getElementById("item").src;

 
    let dec1 = new Image();
  dec1.onload = setTimeout(function () {
    ctx.drawImage(dec,260,35,220,140);
  }, 300);
  dec1.src = document.getElementById("dec").src;

 

 

    dec1.onload = setTimeout(function () {
  ctx.fillStyle = 'gray';
  context.fillText('Dear', 40, 60);
  }, 300);
    dec1.onload = setTimeout(function () {
  ctx.fillStyle = 'green';
  context.fillText(wish_name, 90, 60);
  }, 300);
    dec1.onload = setTimeout(function () {
  ctx.fillStyle = 'gray';
  context.fillText('Sincerely,', 310, 320); 
  }, 300);
    dec1.onload = setTimeout(function () {
  ctx.fillStyle = 'green';
  context.fillText(name, 410, 320); 
  }, 300);
    dec1.onload = setTimeout(function () {
  ctx.fillStyle = 'black';
  context.fillText(string, 45, 100);
  context.fillText(string1,45, 130);
  context.fillText(string2, 45, 160);
  context.fillText(string3, 45, 190);
  context.fillText(string4, 45, 220);
  }, 300);





  
  
  
  




</script>