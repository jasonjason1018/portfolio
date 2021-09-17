<!DOCTYPE html>
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="assets/styles/libs/slick.css">
    <link rel="stylesheet" href="assets/styles/libs/slick-theme.css">
    <link rel="stylesheet" href="assets/styles/sales.css">
    <script src="https://www.youtube.com/iframe_api"></script>
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
@include('include._header')
    <div class="wrapper sales">
      <div class="sales__bg">
        <section class="container">
          <div class="sales__board">
            <h1 class="sales__title"><img src="assets/images/sales/sales_title.png" alt=""></h1>
            <h2 class="sales__subtitle"><img src="assets/images/sales/sales_subtitle.png" alt=""></h2>
            <ul class="product__slider">
              @foreach($product as $data)
              <li class="product__slide">
                <div class="product__img"><img src=" {{ $data->picture }} " alt=""></div>
                <div class="product__content">
                  <div class="product__title">{{ $data->product." ".$data->product2 }}</div>
                  <div class="product__text">{{ $data->description }}</div>
                  <div class="product__btn"><img src="assets/images/sales/sales_btn.png" alt=""></div>
                  <ul class="product__link">
                    <li><a target="_blank" href="{{ $data->momo }}"><img src="assets/images/sales/momo.png" alt=""></a></li>
                    <li><a target="_blank" href="{{ $data->pchome}}" ><img src="assets/images/sales/pc24.png" alt=""></a></li>
                    <li><a target="_blank" href="{{ $data->yahoo }}" ><img src="assets/images/sales/yahoo.png" alt=""></a></li>
                  </ul>
                </div>
              </li>
              @endforeach

            </ul>
          </div>
          <ul class="product__sliderNav">
            <li><img src="assets/images/sales/product_icon1.png" alt=""></li>
            <li><img src="assets/images/sales/product_icon2.png" alt=""></li>
            <li><img src="assets/images/sales/product_icon3.png" alt=""></li>
            <li><img src="assets/images/sales/product_icon4.png" alt=""></li>
            <li><img src="assets/images/sales/product_icon5.png" alt=""></li>
          </ul>
        </section>
      </div>
    </div>
    @include('include._footer')
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/lib/slick.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/sales.js"></script>
  </body>
</html>