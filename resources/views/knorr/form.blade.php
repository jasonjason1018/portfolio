<!DOCTYPE html>
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="assets/styles/form.css">
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
@include('include._header')
    <div class="wrapper form">     
      <div class="content__bg">
        <section class="container">
          <div class="form__board">
            <h1 class="form__title"><img src="assets/images/form/form_title.png" alt=""></h1>
            <p class="form__remind">請完整填寫您的資料，以便中獎、送試用包才能通知您喔！</p>
            <div class="form__arrow"><img src="assets/images/form/form_arrow.png" alt=""></div>
            

            <form class="form__content" method="post" action="/congratulations" id="form1" name="form1">
              @csrf
              <div class="form__group">
                <div class="form__item form__itemAlign form__itemFont">姓名</div>
                <div class="form__input ipt__textarea">
                  <input type="name" id="ipt-name" name="name"><span class="form__tnc">*資料將做為得獎通知使用，請務必填寫正確</span>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemAlign form__itemFont">姓別</div>
                <div class="form__input">
                  <input type="radio" id="ipt_sex_b" name="ipt_sex" value="男">
                  <label for="ipt_sex_b"> <span></span>男</label>
                  <input type="radio" id="ipt_sex_g" name="ipt_sex" value="女">
                  <label for="ipt_sex_g"> <span></span>女</label>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemAlign form__itemFont">Email</div>
                <div class="form__input ipt__textarea">
                  <input type="mail" id="ipt-mail" name="email"><span class="form__tnc">*資料將做為得獎通知使用，請務必填寫正確</span>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemAlign form__itemFont">電話</div>
                <div class="form__input ipt__textarea">
                  <input type="tel" id="ipt-tel" name="phone"><span class="form__tnc">*資料將做為得獎通知使用，請務必填寫正確</span>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemAlign form__itemFont">年齡</div>
                <div class="form__input">
                  <select name="age" id="ipt_age">
                    <option value="20-24 歲">20-24 歲</option>
                    <option value="25-29 歲">25-29 歲</option>
                    <option value="30-34 歲">30-34 歲</option>
                    <option value="35-39 歲">35-39 歲</option>
                  </select>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemFont">居住地方共有幾人？</div>
                <div class="form__input">
                  <input type="radio" id="ipt_people-1" name="ipt_people" value="自己住">
                  <label for="ipt_people-1"> <span></span>自己住</label>
                  <input type="radio" id="ipt_people-2" name="ipt_people" value="2人">
                  <label for="ipt_people-2"> <span></span>2人</label>
                  <input type="radio" id="ipt_people-3" name="ipt_people" value="3-4人">
                  <label for="ipt_people-3"> <span></span>3-4人</label>
                  <input type="radio" id="ipt_people-4" name="ipt_people" value="5人以上">
                  <label for="ipt_people-4"> <span></span>5人以上</label>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemFont">請問以下哪種敘述，較符合您的料理習慣？</div>
                <div class="form__input">
                  <input type="radio" id="ipt_times-1" name="ipt_times" value="每天會煮飯">
                  <label for="ipt_times-1"> <span></span>每天會煮飯</label>
                  <input type="radio" id="ipt_times-2" name="ipt_times" value="每週會煮2次以上">
                  <label for="ipt_times-2"> <span></span>每週會煮2次以上</label>
                  <input type="radio" id="ipt_times-3" name="ipt_times" value="只有特殊節日會煮飯">
                  <label for="ipt_times-3"> <span></span>只有特殊節日會煮飯</label>
                </div>
              </div>
              <div class="form__group">
                <div class="form__item form__itemFont">請您煮飯的時候，較偏好的食材類型(可複選)？</div>
                <div class="form__input">
                  <input type="checkbox" id="ipt_type-1" name="ipt_type[]" value="肉類">
                  <label for="ipt_type-1"> <span></span>肉類</label>
                  <input type="checkbox" id="ipt_type-2" name="ipt_type[]" value="菜類">
                  <label for="ipt_type-2"> <span></span>菜類</label>
                  <input type="checkbox" id="ipt_type-3" name="ipt_type[]" value="海鮮">
                  <label for="ipt_type-3"> <span></span>海鮮</label>
                </div>
              </div>
              <hr class="form__divider">
              <div class="form__group form__detail">
                <input type="radio" id="ipt_detail" name="ipt_detail">
                <label class="form__itemFont" for="ipt_detail"> <span></span>我已經詳細閱讀活動辦法及蒐集個人資料聲明</label>
              </div>
              <div class="form__group">
                <div class="form__item form__itemFont">是否同意接收聯合利華及其合作夥伴的市場推廣資訊？</div>
                <div class="form__input">
                  <input type="radio" id="ipt_info-1" name="ipt_info" value="是">
                  <label for="ipt_info-1"> <span></span>是</label>
                  <input type="radio" id="ipt_info-2" name="ipt_info" value="否">
                  <label for="ipt_info-2"> <span></span>否</label>
                </div>
              </div>
            </form>
          </div>
          <div class="form__btn submit"><a href="javascript:form()"><img src="assets/images/form/form_btn.png" alt=""></a>
            <div class="form__itemFont">將依上述資料聯繫、贈送試用包；數量有限，送完不另行通知。</div>
          </div>
        </section>
      </div>
    </div>






    @include('include._footer')
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/btn.js"></script>
  </body>
</html>