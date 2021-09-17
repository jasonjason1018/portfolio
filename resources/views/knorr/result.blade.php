
<!DOCTYPE html> 
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="assets/styles/libs/slick.css">
    <link rel="stylesheet" href="assets/styles/libs/slick-theme.css">
    <link rel="stylesheet" href="assets/styles/result.css">
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
@include('include._header')
    <div class="wrapper result">
      <div class="content__bg">
        <div class="container result__type1 result__type2 result__type3 result__type4">
          <div class="result__board">
            <div class="result__prize"><img class="hidden__phone" src="assets/images/result/result-prize.png" alt=""><img class="visible__phone" src="assets/images/result/result-prize-m.png" alt=""></div>
            <h1 class="result__title"><img src="assets/images/result/result_title.png" alt=""></h1>
            <section class="result__content">
              

              
              <div class="result__img"><img class="hidden__phone" src="assets/images/result/result_img{{$Q1}}-{{$Q2}}.jpg" alt=""><img class="visible__phone" src="assets/images/result/result_img{{$Q1}}-{{$Q2}}m.jpg" alt=""></div>
              <div class="result__recipebtn">
                @foreach($sno2 as $data2)
              <a href="/recipe{{ $data2->img_url }}/{{ $data2->sno }}">
                @endforeach
              <img src="/assets/images/result/result_recipebtn.jpg" alt=""></a></div>
            </section>
          </div>
          <div class="result__btn"><a href="/knorr_form"><img src="assets/images/result/result_btn.png" alt=""></a></div>
          <section class="borderFrame recommend">
            <div class="borderFrame--outside">
              <div class="borderFrame--inside">

              
                <div class="borderFrameTitle"><img src="assets/images/result/recommend_title{{$Q1}}.png" alt=""></div> <!--小資女-->
                <ul class="recommend__list">
                  @foreach($sno as $data)
                 <li class="recommend__item"><a href="recipe{{$data->img_url}}/{{$data->sno}}"><img src="{{$data->picture1}}" alt=""></a></li>
                   @endforeach
                </ul>
              </div>


            </div>
          </section>
        </div>
        <section class="moreFood">
          <div class="container">
            <div class="moreFood__title"> <img src="assets/images/morefood_title.png" alt=""></div>
            <ul class="moreFood__slider">
              @foreach($sno1 as $data1)
              <li class="moreFood__slide">
                <div><a href="recipe{{$data1->img_url}}/{{$data1->sno}}"><img src="{{$data1->picture1}}" alt=""></a></div>
              </li>
            @endforeach
            </ul>
          </div>
        </section>
      </div>
    </div>
    @include('include._footer')
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/lib/slick.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/morefood.js"></script>
  </body>
</html>