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
  <body class="form-page">
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
      <div class="main hasbtn">
        <div class="main-container">
          <div class="content">
            <div class="form">
              <div class="form-content">
                <form method="post" action="/share" id="data">
                  @csrf
                <div class="form-section"><span class="form-label">
                    <label for="username">真實姓名：</label></span><span class="form-input">
                    <input id="username" type="text" name="name"/></span></div>
                <div class="form-section"><span class="form-label">
                    <label for="userphone">連絡電話：</label></span><span class="form-input">
                    <input id="userphone" type="tel" name="phone" onblur="checkPhone()"/></span>
                    <span  id="phone"></span></div>
                <div class="form-section"><span class="form-label">
                    <label for="usermail">E-mail ：</label></span><span class="form-input">
                    <input id="usermail" type="email" name="email" onblur="checkMail()"/></span>
                    <span id="mail"></span></div>
                  </form>
              </div>
              <div class="form-notice">
                <p class="point">*聯絡資料將做為得獎時連絡使用，請填寫真實資料以免影響您的得獎權利。</p>
              </div>
              <div class="btn-section"><a class="btn btn-next" href="javascript:data();"><span class="btn-text">送出</span></a></div>
            </div>
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
    <script src="assets/scripts/question.js"></script>
    <script src="assets/scripts/check.js"></script>
  </body>
</html>