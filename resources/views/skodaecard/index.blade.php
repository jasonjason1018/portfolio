<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>首頁</title>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/animate.min.css">
    <link rel="stylesheet" href="assets/style/default.css">
    <!-- JS -->
    <script type="text/javascript" src="assets/script/lib/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/script/lib/wow.min.js"></script>
    <script type="text/javascript" src="assets/script/lib/gsap.min.js"></script>
    <script src="assets/script/default.js"></script>
    <script src="assets/script/jason.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src="http://code.jquery.com/jquery-1.7.2.min.js"><\/script>');</script>
</head>

<body>
    <div class="main">
        <!-- header -->
        <header class="header">
            <div class="header__wrapper">
                <a href="" class="logo"></a>
            </div>
        </header>
        <!-- header End-->
        <!-- content -->
        <div class="content">
            <div class="wrapper">
                <div class="sections">
                    <section class="section-01">
                        <h1 class="title wow fadeInDown">Škoda #像極了歐洲</h1>
                        <div class="info">
                            <p class="wow fadeInDown" data-wow-delay="0.7s">好想出國？沒關係！</p>
                            <p class="wow fadeInDown" data-wow-delay="0.9s">讓 ŠKODA 帶你遊歐洲</p>
                            <p class="wow fadeInDown" data-wow-delay="1.2s">寄張來自歐洲的明信片給朋友</p>
                            <p class="wow fadeInDown" data-wow-delay="1.5s">真香~</p>
                        </div>
                        <div class="arrow-icon wow fadeInDown" data-wow-offset="0" data-wow-delay="2s">
                            <span class="arrow arrow-01"></span>
                            <span class="arrow arrow-02"></span>
                            <span class="arrow arrow-03"></span>
                        </div>
                    </section>
                    <section class="section-02">
                        <form action="/result" method="post">
                            @csrf
                        <h2 class="title wow fadeIn">選擇你想去的地方</h2>
                        <div class="options ">
                            <div class="option__item wow flipInY" data-wow-duration="1.2s">
                                <input checked="checked" id="item01" name="place_select" type="radio" value="1"/>
                                <label for="item01">
                                    <div class="image" style="background-image: url(assets/image/1.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="1.2s">
                                <input id="item02" name="place_select" type="radio" value="2"/>
                                <label for="item02">
                                    <div class="image" style="background-image: url(assets/image/2.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="1.2s">
                                <input id="item03" name="place_select" type="radio" value="3"/>
                                <label for="item03">
                                    <div class="image" style="background-image: url(assets/image/3.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item04" name="place_select" type="radio" value="4"/>
                                <label for="item04">
                                    <div class="image" style="background-image: url(assets/image/4.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item05" name="place_select" type="radio" value="5"/>
                                <label for="item05">
                                    <div class="image" style="background-image: url(assets/image/5.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item06" name="place_select" type="radio" value="6"/>
                                <label for="item06">
                                    <div class="image" style="background-image: url(assets/image/6.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item07" name="place_select" type="radio" value="7"/>
                                <label for="item07">
                                    <div class="image" style="background-image: url(assets/image/7.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item08" name="place_select" type="radio" value="8"/>
                                <label for="item08">
                                    <div class="image" style="background-image: url(assets/image/8.jpg)">
                                    </div>
                                </label>
                            </div>
                           <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item09" name="place_select" type="radio" value="9"/>
                                <label for="item09">
                                    <div class="image" style="background-image: url(assets/image/9.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item10" name="place_select" type="radio" value="10"/>
                                <label for="item10">
                                    <div class="image" style="background-image: url(assets/image/10.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item11" name="place_select" type="radio" value="11"/>
                                <label for="item11">
                                    <div class="image" style="background-image: url(assets/image/11.jpg)">
                                    </div>
                                </label>
                            </div>
                            <div class="option__item wow flipInY" data-wow-duration="2s">
                                <input id="item12" name="place_select" type="radio" value="12"/>
                                <label for="item12">
                                    <div class="image" style="background-image: url(assets/image/12.jpg)">
                                    </div>
                                </label>
                            </div> 
                        </div>
                    </section>
                    <section class="section-03">
                        
                        <h2 class="title wow fadeIn">寫下你的祝福</h2>
                        <div class="cardForm wow fadeInUp">
                            <div class="cardForm__group">
                                <h5 class="cardForm__title">您的姓名</h5>
                                <div class="custom-input">
                                    <input type="text" name="name" id="">
                                </div>
                            </div>
                        

                            <div class="cardForm__group">
                                <h5 class="cardForm__title">您要祝福的人的姓名</h5>
                                <div class="custom-input">
                                    <input type="text" name="wish_name" id="">
                                </div>
                            </div>

                            <div class="cardForm__group">
                                <h5 class="cardForm__title">您要祝福的內容<span class="sm">(限30字內)</span></h5>
                                <div class="custom-input">
                                    <textarea  name="textarea" id="TextArea1" cols="30" rows="7" onkeypress="return limitTextAreaRows(this)" onkeyup="words_deal();"></textarea>
                                </div>
                            </div>
                            <button class="btn-fill" type="submit">送出祝福</button>
                        </div>
                    </section>
                    </form>
                </div>
                <div class="footer"> <span>©2021 Škoda Auto a.s.</span> </div>
            </div>
            <!-- content End -->
        </div>

</body>
<a href="/card">card</a>
</html>