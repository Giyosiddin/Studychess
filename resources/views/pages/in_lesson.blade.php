@extends('layouts.front')

@section('content')

 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>Изучайте <br> шахматы вместе <br> с нами!</h1>
      <p>Все, чтобы поднять технику игры на следующий уровень</p>
    </div>
  </section>
  <section class="inside_video">
    <div class="container">
      <h2>Тема: {{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h2>
      <p>{{$lesson->getTranslatedAttribute('description', 'locale', app()->getLocale())}}</p>
      <div class="my_video">
        <video controls="">
          <source src="/movie.mp4" type="video/mp4">
          <source src="/movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="btm_video">
        <div class="btm_video_top">
          <p><img src="/images/saturn.svg" alt="">{{$lesson->getTranslatedAttribute('for_who', 'locale', app()->getLocale())}}</p>
          <p><img src="/images/clock.svg" alt="">30 минут</p>
        </div>
        <div class="video_item_text_price">
          <img src="/images/money.svg" alt="">
          {{$lesson->price}}. сум
        </div>
      </div>
     <?=$lesson->getTranslatedAttribute('body', 'locale', app()->getLocale());?>
        <div class="links_other_courses">
          <a href="{{route('add-to-cart',['lesson',$lesson->id])}}" class="to_cart btn_template">Добавить корзину</a>
          <div class="links_other_courses_in">
            <!-- <a href="#" class="links"><img src="images/long-arrow-pointing-to-left.svg" alt="">Предыдующей урок</a> -->
            <!-- <a href="#" class="">Cледующей урок <img src="images/right-arrow.svg" alt=""></a> -->
            <a href="#">Добавить видеокурс</a>
          </div>
        </div>

    </div>
  </section>

@endsection