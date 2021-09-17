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
              <div class="form">
                <div class="form-content">
                  <form method="post" action="/data" id="data">
                    @csrf
                  <div class="form-section"><span class="form-label">
                      <label for="username">真實姓名：</label></span><span class="form-input">
                      <input id="username" type="text" name="name"/></span></div>
                  <div class="form-section"><span class="form-label">
                      <label for="userphone">連絡電話：</label></span><span class="form-input">
                      <input id="userphone" type="tel" name="phone_number" onblur="checkPhone()" /></span>
                    <span id="phone" style="margin-left: 100px"></span></div>
                  <div class="form-section"><span class="form-label">
                      <label for="usermail">E-mail ：</label></span><span class="form-input">
                      <input id="usermail" type="email" name="email" onblur="checkMail()" /></span>
                     <span id="mail" style="margin-left: 100px"></span></div>
                    </form>
                </div>
                <div class="form-button"><a class="btn btn-next"   href="javascript:data()"><span class="btn-text">送出</span></a></div>
                <div class="form-notice">
                  <p>*聯絡資料將做為得獎時連絡使用，請填寫真實資料以免影響您的得獎權利。</p>
                </div>
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
    <script src="assets/scripts/question.js"></script>
    <script src="assets/scripts/check.js"></script>
  </body>
</html>