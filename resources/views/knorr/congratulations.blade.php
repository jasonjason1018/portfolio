<!DOCTYPE html>
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="assets/styles/congratulations.css">
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
    @include('include._header')
    <div class="wrapper congratulations">     
      <div class="content__bg">
        <section class="container">
          <h1 class="congratulations__title"><img src="assets/images/congratulations/congratulations_title.png" alt=""></h1>
          <div class="congratulations__content">
            <div class="moreRecipe">
              <h2 class="moreRecipe__title">看更多食譜</h2>
              <div class="moreRecipe__img"><a href="recipelist.php"><img src="assets/images/congratulations/morerecipe_img.png" alt=""></a></div>
            </div>
            <div class="shareFb">
              <h2 class="shareFb__title">分享我的測驗結果</h2>
              <div class="shareFb__img"><a href=""><img src="assets/images/congratulations/share-4-4.png" alt=""></a></div>
            </div>
          </div>
        </section>
      </div>
    </div>
    @include('include._footer')
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
  </body>
</html>