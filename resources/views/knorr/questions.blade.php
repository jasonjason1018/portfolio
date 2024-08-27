<!DOCTYPE html>
<html>
<head>
    @include('knorr.include._head')
    <link rel="stylesheet" href="/knorr_assets/styles/questions.css">

</head>
<body>
<div class="scrollTop" id="scrollTop"><img src="/knorr_assets/images/scrolltop.png" alt=""></div>
@include('knorr.include._header')
<div class="wrapper questions">
    <div class="content__bg">
        <div class="container">
            <h1 class="questions__title"><img src="/knorr_assets/images/question/question_title.png" alt=""></h1>
            <section class="questions__content">

                <div class="questions__board" style="display: block" id="Q0">
                    <div class="questions__prize">
                        <img
                            class="hidden__phone"
                            src="/knorr_assets/images/question/question-prize.png"
                            alt=""
                        >
                        <img
                            class="visible__phone"
                            src="/knorr_assets/images/question/question-prize-m.png"
                            alt=""
                        >
                    </div>
                    <div class="questions__question">A. 如果人生是齣戲，你覺得自己像是哪類戲劇的主角?</div>
                    <div class="answer" id="question">

                    </div>
                </div>

                <div class="questions__btn">

                    <div class="questions__btn--prev" id="prev" style="display: none">
                        <img src="/knorr_assets/images/question/question_btn_prev.png" alt="">
                    </div>

                    <div class="questions__btn--next" id="next">
                        <img src="/knorr_assets/images/question/question_btn_next.png" alt="">
                    </div>

                    <div class="questions__btn--result" id="result" style="display: none">
                        <a href="javascript:void(0)">
                            <img src="/knorr_assets/images/question/question_btn_result.png" alt="">
                        </a>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>

@include('knorr.include._footer')
<script src="/knorr_assets/scripts/lib/jquery.min.js"></script>
<script src="/knorr_assets/scripts/main.js"></script>
<script src="/knorr_assets/scripts/questions.js"></script>
<script>
    var questionNumber = 1;

    var selectAnswer;

    var answerList = {};

    $(document).ready(function () {
        const questionHtml = showQuestion();

        $('#question').html(questionHtml);
    });

    function showQuestion()
    {
        let questionHtml = '';
        let imageName;
        for (let i = 1; i <= 4; i++) {
            imageName = questionNumber == 1?`q1-a${i}`:`q${questionNumber}-a${selectAnswer}-${i}`;

            questionHtml += `<div class="answer answerDiv" id="${i}">` +
                '<img ' +
                `class="hidden__phone" src="/knorr_assets/images/question/${imageName}.png"` +
                'alt=""' +
                '>' +
                `<img class="visible__phone" src="/knorr_assets/images/question/${imageName}m.png" alt="">` +
                '</div>';
        }

        return questionHtml;
    }

    $(document).on('click', '.answerDiv', function () {
        answerList[questionNumber] = selectAnswer;
        selectAnswer = this.id;
        $('.answer__select').removeClass('answer__select');
        $(`#${this.id}`).addClass('answer__select');
    });

    $(document).on('click', '#next', function () {
        if (selectAnswer === undefined) return;

        answerList[questionNumber] = selectAnswer;

        questionNumber = 2;

        const questionHtml = showQuestion();

        $('.answer__select').removeClass('answer__select');
        $('#question').html(questionHtml);
        $('#prev, #result').show();
    });

    $(document).on('click', '#prev', function () {
        $('.answer__select').removeClass('answer__select');

        answerList[questionNumber] = '';

        questionNumber = 1;

        const questionHtml = showQuestion();

        $('#question').html(questionHtml);
        $('#prev, #result').hide();
    });

    $(document).on('click', '#result', function () {
        answerList[questionNumber] = selectAnswer;
        const param = JSON.stringify(answerList);
        location.href = `/knorr/result/${param}`;
    });
</script>
{{--<script src="/knorr_assets/scripts/btn.js"></script>--}}
</body>
</html>
