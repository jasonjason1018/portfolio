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
<meta property="og:image" content="/assets/images/thumbnail.jpg">
<meta name="google" content="notranslate" />
    <link rel="stylesheet" href="/assets/styles/main.css"/>
  </head>
  <body class="question-page">
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
            <div class="area line-box">
              @foreach($data as $v)
              <figure class="areea-img"><img src="/assets/images/area-{{$no}}/area-header-{{$v->img}}.jpg" alt=""/></figure>
              <div class="area-content">
                <h2 class="area-name">{{$v->name}}</h2>
                <div class="area-recommend"> 
                  <div class="area-recommend-title">推薦指數</div>
                  <ul class="area-star">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                  </ul>
                </div>
              </div>
            </div>

            <form method="get" action="/answer" id="form1">

            <div class="q line-box" id="question-1">
              <div class="q-num"> <span>Q1</span></div>
              <h3 class="q-title">{{$v->Q1}}</h3>
              <div class="q-content">
                      @php
                      $A1=explode("\n", $v->A1);
                      @endphp
                      @foreach($A1 as $k=>$v)
                <div class="q-check">
                  <input onChange="answer{{$no}}()" type="radio" value="{{$k+1}}" id="q1-{{$k+1}}" name="q1"/>
                  <label for="q1-{{$k+1}}"></label><span>{{$v}}</span>
                </div>
                @endforeach
                 @endforeach
              </div>
            </div>
            @foreach($data as $v)
            <div class="q line-box" id="question-2">
              <div class="q-num"> <span>Q2</span></div>
              <h3 class="q-title">{{$v->Q2}}</h3>
              <div class="q-content">
                      @php
                      $A2=explode("\n", $v->A2);
                      @endphp
                      @foreach($A2 as $k=>$v)
                <div class="q-check">
                  <input onChange="answer{{$no}}()" type="radio" value="{{$k+1}}" id="q2-{{$k+1}}" name="q2"/>
                  <label for="q2-{{$k+1}}"></label><span>{{$v}}</span>
                </div>
                @endforeach
                @endforeach
              </div>
            </div>
            @foreach($data as $v)
            <div class="q line-box" id="question-3">
              <div class="q-num"> <span>Q3</span></div>
              <h3 class="q-title">{{$v->Q3}}</h3>
              <div class="q-content">
                @php
                $A3=explode("\n", $v->A3);
                @endphp
                @foreach($A3 as $k=>$v)
                <div class="q-check">
                  <input onChange="answer{{$no}}()" type="radio" value="{{$k+1}}" id="q3-{{$k+1}}" name="q3"/>
                  <label for="q3-{{$k+1}}"></label><span>{{$v}}</span>
                </div>
                @endforeach
                @endforeach
              </div>
            </div>
          </form>
            @php
            $a="#correct";
            $b="#incorrect";
            @endphp
            <div id="yes" class="btn-section" style="display:none;"><a class="btn" href="javascript:;" data-fancybox="" data-src="{{$a}}" > <span>送出答案</span></a>
              <!-- data-fancybox="" data-src="{{$a}}" -->
            </div>
            <div id="no" class="btn-section" style="display:;"><a class="btn" href="javascript:;" data-fancybox="" data-src="{{$b}}" > <span>送出答案</span></a></div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <p>Copyright © 遊日本有限公司</p>
        </div>
      </footer>
    </div>
    <div class="qbox" id="correct">
      <div class="qbox-container">
        <div class="qbox-border">
          <h3 class="qbox-title">恭喜你，答對了！</h3>
          <div class="qbox-content">
            <p> <span>趕快前往填寫資料，就能參加抽獎，</span><span>有機會獲得日本限定好禮！</span></p>
          </div>
        </div>
        <div class="qbox-btn"><a class="btn" href="/form"> <span>參加抽獎</span></a></div>
      </div>
    </div>
    <div class="qbox" id="incorrect">
      <div class="qbox-container">
        <div class="qbox-border">
          <h3 class="qbox-title">歐歐！你答錯了！</h3>
          <div class="qbox-content">
            <p> <span>答案就在介紹說明中，仔細看看～</span><span>你會找到解答的！</span></p>
          </div>
        </div>
        @foreach($data as $v)
        <div class="qbox-btn"><a class="btn btn-warning" href="/info/{{$v->id}}"><span>再挑戰一次</span></a></div>
        @endforeach
      </div>
    </div>
    <!-- share Js-->
    <script src="/assets/scripts/lib/jquery.min.js"></script>
    <script src="/assets/scripts/lib/jquery.fancybox.min.js"></script>
    <script src="/assets/scripts/question.js"></script>
    <script src="/assets/scripts/qa.js"></script>
  </body>
</html>