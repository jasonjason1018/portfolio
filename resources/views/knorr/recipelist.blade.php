
<!DOCTYPE html>
<html>
  <head>
    @include('include._head')
    <link rel="stylesheet" href="assets/styles/recipelist.css">
  </head>
  <body>
    <div class="scrollTop" id="scrollTop"><img src="assets/images/scrolltop.png" alt=""></div>
    @include('include._header')
    <div class="wrapper recipeList">    
      <div class="content__bg">
        <div class="container">
          <h1 class="recipeList__title"><img src="assets/images/recipelist/recipelist_title.png" alt=""></h1>
            @for($i=1;$i<4;$i++)
              @if($i==1)
                @php $a = 'meat' @endphp
              @elseif($i==2)
                @php $a='seafood' @endphp
              @else
                @php $a='vegetables' @endphp
              @endif
          <section class='recipeList__list {{$a}}List'>
          <div class='recipeList__listTitle'>
          <img src="/assets/images/recipelist/{{$a}}_title.png" alt=''></div>
          <ul>
            @if($i==1)
            @foreach($sno as $data)
          <li class="recipeList__item"><a href="/recipe{{ $data->img_url }}/{{ $data->sno }}"><img src="{{ $data->picture1 }}" alt=""></a></li>
            @endforeach
            @elseif($i==2)
            @foreach($sno1 as $data1)
          <li class="recipeList__item"><a href="/recipe{{ $data1->img_url }}/{{ $data1->sno }}"><img src="{{ $data1->picture1 }}" alt=""></a></li>
            @endforeach
            @elseif($i==3)
            @foreach($sno2 as $data2)
          <li class="recipeList__item"><a href="/recipe{{ $data2->img_url }}/{{ $data2->sno }}"><img src="{{ $data2->picture1 }}" alt=""></a></li>
            @endforeach
            @endif
            @endfor
          </ul></section>
        </div>
      </div>
    </div>
    @include('include._footer')
    <script src="assets/scripts/lib/jquery.min.js"></script>
    <script src="assets/scripts/main.js"></script>
    <script src="assets/scripts/rescipelist.js"></script>
  </body>
</html>
