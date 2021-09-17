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
  <body class="question-page">
    <div class="event-wrap">
      <div class="event-title">
        <div class="title-letsgo"><span>Let's Go! 福島</span></div>
      </div>
      <div class="event-content">
        <div class="box">
          <div class="box-container">
            <div class="box-top"><span> </span></div>
            <div class="box-main">
              
              <div class="q" id="question-1">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">每到一個景點一定要打卡上傳IG或是臉書。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q1-1" name="q1"/>
                    <label for="q1-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="1" id="q1-2" name="q1"/>
                    <label for="q1-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q1()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
              

              <div class="q" id="question-2">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">規劃旅遊時,會挑選住宿有設計感、或是建築特色的旅店。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q2-1" name="q2"/>
                    <label for="q2-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q2-2" name="q2"/>
                    <label for="q2-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q2()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
             

             <div class="q" id="question-3">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">願意花大錢吃高級料理或星級餐廳。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q3-1" name="q3"/>
                    <label for="q3-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q3-2" name="q3"/>
                    <label for="q3-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q3()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
             

              <div class="q" id="question-4">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">願意為了去一個秘境美景走很多路。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q4-1" name="q4"/>
                    <label for="q4-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q4-2" name="q4"/>
                    <label for="q4-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q4()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
              

              <div class="q" id="question-5">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">到一個新的城市旅遊,都會想要了解這個城市的故事。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q5-1" name="q5"/>
                    <label for="q5-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q5-2" name="q5"/>
                    <label for="q5-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q5()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
              

              <div class="q" id="question-6">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">出國旅遊比起每天精心打扮，更喜歡輕鬆舒服的穿著。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q6-1" name="q6"/>
                    <label for="q6-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q6-2" name="q6"/>
                    <label for="q6-2"></label><span>不是</span>
                  </div>
                </div>
                <div class="q-button" onclick="Q6()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
              </div>
              

              <div class="q" id="question-7">
                <div class="q-header">
                  <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                  <h3 class="q-title">比起建築等人文拍照景點，更愛大自然風景。</h3>
                </div>
                <div class="q-content">
                  <div class="q-check">
                    <input type="radio" value="1" id="q7-1" name="q7"/>
                    <label for="q7-1"></label><span>是</span>
                  </div>
                  <div class="q-check">
                    <input type="radio" value="0" id="q7-2" name="q7"/>
                    <label for="q7-2"></label><span>不是</span>
                  </div>
                </div>
                  <div class="q-button" onclick="Q7()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
                </div>
              
                

                <div class="q" id="question-8">
                  <div class="q-header">
                    <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                    <h3 class="q-title">安排旅遊景點時,一定會去當地最有歷史的建築或是博物館參觀。</h3>
                  </div>
                  <div class="q-content">
                    <div class="q-check">
                      <input type="radio" value="1" id="q8-1" name="q8"/>
                      <label for="q8-1"></label><span>是</span>
                    </div>
                    <div class="q-check">
                      <input type="radio" value="0" id="q8-2" name="q8"/>
                      <label for="q8-2"></label><span>不是</span>
                    </div>
                  </div>
                  <div class="q-button"  onclick="Q8()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
                </div>
                

                <div class="q" id="question-9">
                  <div class="q-header">
                    <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                    <h3 class="q-title">一定會安排去旅遊當地的特色星巴克或知名咖啡廳朝聖。</h3>
                  </div>
                  <div class="q-content">
                    <div class="q-check">
                      <input type="radio" value="1" id="q9-1" name="q9"/>
                      <label for="q9-1"></label><span>是</span>
                    </div>
                    <div class="q-check">
                      <input type="radio" value="0" id="q9-2" name="q9"/>
                      <label for="q9-2"></label><span>不是</span>
                    </div>
                  </div>
                  <div class="q-button" onclick="Q9()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
                </div>
                

                <div class="q" id="question-10">
                  <div class="q-header">
                    <div class="q-img"><img src="assets/images/q.png" alt=""/></div>
                    <h3 class="q-title">比起走景點拍照，更傾向把花時間花在排當地知名拉麵店等餐廳。</h3>
                  </div>
                  <div class="q-content">
                    <div class="q-check">
                      <input type="radio" value="1" id="q10-1" name="q10"/>
                      <label for="q10-1"></label><span>是</span>
                    </div>
                    <div class="q-check">
                      <input type="radio" value="0" id="q10-2" name="q10"/>
                      <label for="q10-2"></label><span>不是</span>
                    </div>
                  </div>
                  <div class="q-button" onclick="Q10()"><a class="btn btn-next" href="#"><span class="btn-text">下一步</span></a></div>
                </div>
              </div>
            </div>
            <div class="box-bottom"><span> </span></div>
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
    <script src="/assets/scripts/lib/jquery.min.js"></script>
    <script src="/assets/scripts/question.js"></script>
  </body>
</html>