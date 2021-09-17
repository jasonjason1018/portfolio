<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/><title>專屬你的福島之旅 </title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="專屬你的福島之旅">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="assets/images/thumbnail.jpg">
<meta name="google" content="notranslate" />
    <link rel="stylesheet" href="assets/styles/main.css"/>
  </head>
  <body class="form-page">
    <div class="event-wrap">
      <div class="event-title">
        <div class="title-letsgo"><span>Let's Go! 福島</span></div>
      </div>
      <div class="event-content">
        <div class="box">
          <div class="box-container">
            <div class="box-top"><span> </span></div>
            <div class="box-main">
              <div class="share-box">
                <div class="share-content">
                  <p>
                     分享邀請好友來參加，還可加碼抽福島限定好禮！參加愈多次、分享愈多次、<span class="point">中獎機率愈高哦！</span></p>
                  <div class="share-btn"><a class="btn btn-again" href="/qa"><span class="btn-text">再測一次</span></a><a class="btn btn-share2" href="#"><span class="btn-text" onclick="share()">分享加碼抽</span></a></div>
                </div>
                <div class="share-gift"><img src="assets/images/share-gift.png"/></div>
              </div>
            </div>
            <div class="box-bottom"><span> </span></div>
          </div>
        </div>
      </div>
      <div class="map"><span></span>
        <div class="pin pin-1"><span></span></div>
        <div class="pin pin-2"><span></span></div>
        <div class="pin pin-3"><span></span></div>
        <div class="pin pin-4"><span></span></div>
      </div>
    </div>
    <!-- share Js-->
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/lib/share.js"></script>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1116878418766951',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  </body>
</html>