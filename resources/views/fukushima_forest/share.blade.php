<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1, maximum-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/><title>福島森友會大集合</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="福島森友會大集合">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="assets/images/thumbnail.jpg">
<meta name="google" content="notranslate" />
    <link rel="stylesheet" href="assets/styles/main.css"/>
  </head>
  <body class="share-page">
    <header>
      <div class="brand-logo"><a href="/"><img src="https://visitfukushima.tw/f_event2/images/t001.gif" alt="日本東北之美，福島"/></a></div>
    </header>
    <div class="wrap">
      <div class="kv">
        <div class="container">
          <div class="slogan"> 
            <h1 class="slogan-title"> <span>福島森友會大集合</span></h1>
            <h2 class="slogan-text"><span>跟著各區域吉祥物玩福島，正確回答相關問題，即可獲得日本直送好禮，分享活動給朋友還能加碼抽分享獎唷!</span></h2>
          </div>
        </div>
      </div>
      <div class="main">
        <div class="main-container">
          <div class="content">
            <div class="share-box">
              <div class="share-content">
                <p>
                   邀請好友來認識福島吉祥物們，還可加碼抽限定好禮參加越多次、 分享越多次<span class="point">中獎機率愈高哦！</span></p>
              </div>
              <div class="share-gift"><img src="assets/images/share-gift.png"/></div>
            </div>
            <div class="share-btn"><a class="btn" href="/"><span class="btn-text">挑戰其他吉祥物</span></a><a onclick="share()" class="btn btn-secondary" href="#"><span class="btn-text">分享加碼抽</span></a></div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <p>Copyright © 遊日本有限公司</p>
        </div>
      </footer>
    </div>
    <!-- share Js-->
    <script src="assets/scripts/lib/jquery.min.js"></script>
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
  function share()
{
  FB.ui(
    {
      method: 'share',
      href: 'https://www.youtube.com/',
    },
    // callback
    function(response) {
      if (response && !response.error_message) {
        alert('分享成功後即可領取紅利!');
      } else {
        // alert('Error while posting.');
      }
    }
  )
};
</script>
  </body>
</html>