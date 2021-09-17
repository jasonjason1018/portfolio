<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>送出頁</title>
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
                    <section class="section-card">
                        <h2 class="title">您所送出去的祝福</h2>
                        <div class="eCard wow flipInY">
                            <div class="eCard__content">
                                <div class="text">
                                    <div class="sendTo">Dear<span>{{$wish_name}}</span></div>
                                    <div class="info">
                                        {{$textarea}}
                                    </div>
                                    <div class="sendfrom">
                                        Sincerely,<span>{{$name}}</span>
                                    </div>
                                </div>
                                <div class="eCard__footer">
                                    <span class="logo"></span>
                                </div>
                                <div class="image"><img src="assets/image/{{$img}}.jpg" ></div>
                            </div>
                        </div>

                        <div class="btn-area wow fadeInUp"  data-wow-offset="0">
                            <button class="btn-fill"><a href="/" style="color:white;">重新編輯</a></button>
                            <button class="btn-fill"><a target="blank" href="https://lineit.line.me/share/ui?url=<?php echo 'http://localhost:8000/card'; ?>/{{$data_id}}" style="color:white;">分享祝福</a></button>
                        </div>
                    </section>
                </div>
                <div class="footer"> <span>©2021 Škoda Auto a.s.</span> </div>
            </div>
            <!-- content End -->
        </div>

</body>

</html>