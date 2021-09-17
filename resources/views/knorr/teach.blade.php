<!DOCTYPE html>
<html>
  <head>
  <?php include('_head.php');?>
    <link rel="stylesheet" href="assets/styles/libs/slick.css">
    <link rel="stylesheet" href="assets/styles/libs/slick-theme.css">
    <link rel="stylesheet" href="assets/styles/teach.css">
    <script src="https://www.youtube.com/iframe_api"></script>
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
<?php include('_header.php');?>
    <div class="wrapper teach">
      <div class="content__bg">
        <div class="container">
          <div class="teach__board">
            <h1 class="teach__title"><img src="assets/images/teach/teach_title.png" alt=""></h1>
            <section class="teach__content">
              <div class="teach__video teach__video--1">
                <div class="teach__videoImg"><img src="assets/images/teach/commingsoon.jpg" alt=""></div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="lightBox">   
        <div class="lightBox__close"><img src="assets/images/close.png" alt=""></div>
        <div class="lightBox__container">
          <div id="player"></div>
        </div>
      </div>
    </div>
    <?php include('_footer.php');?>
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/lib/slick.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/teach.js"></script>
  </body>
</html>