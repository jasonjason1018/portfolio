<!DOCTYPE html>
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="/assets/styles/libs/slick.css">
    <link rel="stylesheet" href="/assets/styles/libs/slick-theme.css">
    <link rel="stylesheet" href="/assets/styles/recipe.css">
  </head>
  <body>

    <div class="scrollTop" id="scrollTop"><img src="/assets/images/scrolltop.png" alt=""></div>
@include('include._header')
    <div class="wrapper recipe recipe1">   
      <div class="content__bg">
        <div class="container">
          <div class="backPage"><a href="/recipelist"><img src="/assets/images/recipe/back.png" alt=""></a></div>
          <div class="recipe__board">
            <div class="recipe__img">
              @foreach($sno as $data)
              <img class="hidden__phone" src="/{{$data->picture1}}" alt="">
              @endforeach
              <img class="visible__phone" src="/assets/images/recipe/recipe1-1m.jpg" alt=""></div>
            
            
              
            <div class="recipe__top">
              <div class="borderFrame recipe__ingredients">
                <div class="borderFrame--outside">
                  <div class="borderFrame--inside">
                    <div class="borderFrameTitle"><img src="/assets/images/recipe/ingredients_title.jpg" alt=""></div>
                    @php
                    $value = explode("\n", $data->food);
                    $value1 = explode("\n", $data->seasoning);
                    $value2 = explode("\n", $data->practice);
                    $value3 = explode("\n", $data->secret);
                    @endphp
                    <ul class="ingredients__list">
                    @foreach($value as $data)
                     <li>{{ $data }}</li>
                    @endforeach
                  </ul>
                  </div>
                </div>
              </div>
              <div class="borderFrame recipe__seasoning">
                <div class="borderFrame--outside">
                  <div class="borderFrame--inside">
                    <div class="borderFrameTitle"><img src="/assets/images/recipe/seasoning_title.jpg" alt=""></div>
                    <ul class="seasoning__list">
                    @foreach($value1 as $data)
                    <li>{{ $data }}</li>
                    @endforeach
                  </ul>
                  </div>
                </div>
              </div>
              <div class="borderFrame recipe__practice">
                <div class="borderFrame--outside">
                  <div class="borderFrame--inside">
                    <div class="borderFrameTitle"><img src="/assets/images/recipe/practice_title.jpg" alt=""></div>
                    <ul class="practice__list">
                      @foreach($value2 as $data)
                     <li>{{ $data }}</li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section class="borderFrame delicious">
            <div class="borderFrame--outside">
              <div class="borderFrame--inside">
                <div class="borderFrameTitle"><img src="/assets/images/recipe/recipe1_delicious_title.png" alt=""></div>
                <ul class="delicious__list">
                  @foreach($value3 as $data)
               <li>{{ $data }}</li>
                @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
        <section class="moreFood">
          <div class="container">
            <div class="moreFood__title"> <img src="/assets/images/morefood_title.png" alt=""></div>
            <ul class="moreFood__slider">

              @foreach($sno1 as $data1)
              <li class="moreFood__slide">
                <div><a href="/recipe{{ $data1->img_url }}/{{ $data1->sno }}"><img src="/{{ $data1->picture1 }}" alt=""></a></div>
              </li>
              @endforeach
            </ul>
          </div>
        </section>
      </div>
    </div>
    @include('include._footer')
    <script src="/assets/scripts/lib/jquery.min.js"></script>
    <script src="/assets/scripts/lib/slick.min.js"></script>
    <script src="/assets/scripts/main.js"></script>
    <script src="/assets/scripts/morefood.js"></script>
  </body>
</html>