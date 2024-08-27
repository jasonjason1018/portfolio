<!DOCTYPE html>
<html>
  <head>
    @include('knorr.include._head')
    <link rel="stylesheet" href="/knorr_assets/styles/index.css">
    <link rel="stylesheet" href="/knorr_assets/styles/winner-lightbox.css">
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="/knorr_assets/images/scrolltop.png" alt=""></div>
    @include('knorr.include._header')
    <div class="wrapper index">
      <section class="kv">
        <div class="kv__btn"><a href="/questions"> </a></div>
      </section>
      <div class="content__bg" id="video">
        <section class="video">
          <h1 class="video__title"><img src="/knorr_assets/images/index/video_title.png" alt=""></h1>
          <div class="video__content">
            <div class="video__player video__player--1" data-id="5sw6nQSvTPY">
              <div class="video__playerImg"><img src="/knorr_assets/images/index/video_img1.jpg" alt=""></div>
              <div class="video__playerTitle"><img src="/knorr_assets/images/index/video_title1.png"></div>
            </div>
            <div class="video__player video__player--2" data-id="_fm4IbmuLfw">
              <div class="video__playerImg"><img src="/knorr_assets/images/index/video_img2.jpg" alt=""></div>
              <div class="video__playerTitle"><img src="/knorr_assets/images/index/video_title2.png"></div>
            </div>
          </div>
        </section>
      </div>
      <!-- 20190807 -->
      <div class="lightBox winnerList">
        <div class="lightBox__container">
          <div class="winnerList__board">
            <div class="winnerList__close"><img src="/knorr_assets/images/winner/winner-close.png" alt=""></div>
            <div class="winnerList__board--line">
              <div class="winnerList__title"><img src="/knorr_assets/images/winner/winner-title.png" alt=""></div>
              <div class="winnerList__block">
                <div class="winnerList__subtitle winnerList__subtitle--1"><img src="/knorr_assets/images/winner/winner-subtitle-1.png" alt=""></div>
                <div class="winnerList__text">得獎者：洪O珍</div>
              </div>
              <div class="winnerList__block">
                <div class="winnerList__subtitle winnerList__subtitle--2"><img src="/knorr_assets/images/winner/winner-subtitle-2.png" alt=""></div>
                <div class="winnerList__text">得獎者將於08/07收到簡訊，請依簡訊內容於08/20(二)前填寫寄送地址，以供寄送贈品，逾期未填答則視為放棄，恕不補發。</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 20190807 -->
      <div class="lightBox">
        <div class="lightBox__close"><img src="/knorr_assets/images/close.png" alt=""></div>
        <div class="lightBox__container">
          <div id="player"></div>
        </div>
      </div>
    </div>
    @include('knorr.include._footer')
    <script src="/knorr_assets/scripts/lib/jquery.min.js"></script>
    <script src="/knorr_assets/scripts/main.js"></script>
    <script src="/knorr_assets/scripts/index.js"></script>
    <script src="/knorr_assets/scripts/winner-lightbox.js"></script>
  </body>
</html>
