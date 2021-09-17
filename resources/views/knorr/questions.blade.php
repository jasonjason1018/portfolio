<!DOCTYPE html>
<html>
  <head>
    @include('knorr.include._head')
    <link rel="stylesheet" href="knorr_assets/styles/questions.css">

  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="knorr_assets/images/scrolltop.png" alt=""></div>
    @include('knorr.include._header')
    <div class="wrapper questions">     
      <div class="content__bg">
        <div class="container">
          <h1 class="questions__title"><img src="knorr_assets/images/question/question_title.png" alt=""></h1>
          <section class="questions__content">

            <div class="questions__board" style="display:" id="Q0">
              <div class="questions__prize"><img class="hidden__phone" src="knorr_assets/images/question/question-prize.png" alt=""><img class="visible__phone" src="knorr_assets/images/question/question-prize-m.png" alt=""></div>
              <div class="questions__question">A. 如果人生是齣戲，你覺得自己像是哪類戲劇的主角?</div>
              <div class="answer">
                
                
                 @for($i=1;$i<5;$i++)
                  <div class="answer'.$i.' answer__select" onClick="choseQ0({{$i}})"><img class="hidden__phone" src="knorr_assets/images/question/q1-a{{ $i }}.png" alt=""><img class="visible__phone" src="knorr_assets/images/question/q1-a{{ $i }}m.png" alt=""></div>
                @endfor
              </div>
            </div>



            <form method="post" action="/knorr_result" id="resultdata">
              @csrf
            <input type="hidden" id="number" value="" name="number">
            <input type="hidden" id="Q2_number" value="" name="Q2_number">
          </form>


          @for($a=1;$a<5;$a++)
                <div class="questions__board" style="display:none" id="Q{{$a}}">
              <div class="questions__prize"><img class="hidden__phone" src="knorr_assets/images/question/question-prize.png" alt=""><img class="visible__phone" src="knorr_assets/images/question/question-prize-m.png" alt=""></div>
              <div class="questions__question">B. 你平日活動或興趣是?</div>
              <div class="answer">
                @for($i=1;$i<5;$i++)
                <div class="answer{{$a}} answer__select" onClick="choseQ2({{$i}})">
                <img class="hidden__phone" src="knorr_assets/images/question/q2-a{{$a}}-{{$i}}.png" alt=""><img class="visible__phone" src="knorr_assets/images/question/q2-a{{$a}}-{{$i}}m.png" alt=""></div>
                @endfor
                
                </div>
                </div>
          
          @endfor
             





            

          
            <!-- .questions__btn-->
            <!--   .questions__btn--prev-->
            <!--     a(href="#")-->
            <!--       img(src="knorr_assets/images/question/question_btn_prev.png", alt="")-->
            <!--   .questions__btn--next-->
            <!--     a(href="#")-->
            <!--       img(src="knorr_assets/images/question/question_btn_next.png", alt="")-->
            <!--   .questions__btn--result-->
            <!--     a(href="result.php")-->
            <!--       img(src="knorr_assets/images/question/question_btn_result.png", alt="")-->
                       
                       <div class="questions__btn">
                      
                        <div class="questions__btn--prev"  style="display:none" id="prev" onClick="prev()">
                            <img src="knorr_assets/images/question/question_btn_prev.png" alt="">
                      </div>

                        <div class="questions__btn--next" style="display:none" id="next" onClick="next()">
                            <img src="knorr_assets/images/question/question_btn_next.png" alt="">
                      </div>

                        <div class="questions__btn--result" style="display:none" id="result">
                          <a href="javascript:submit()">
                           <img src="knorr_assets/images/question/question_btn_result.png" alt="">
                      </div>
                    
                    </div>
          </section>
        </div>
      </div>
    </div>

    @include('knorr.include._footer')
    <script src="knorr_assets/scripts/lib/jquery.min.js"></script>
    <script src="knorr_assets/scripts/main.js"></script>
    <script src="knorr_assets/scripts/questions.js"></script>
    <script src="knorr_assets/scripts/btn.js"></script>
  </body>
</html>