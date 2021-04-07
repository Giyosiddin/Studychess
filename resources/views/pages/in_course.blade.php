@extends('layouts.front')

@section('content')

 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>Курс</h1>
      <p>После прохождения всего курса, вам дается 1-часовая онлайн конференция с тренером из сообщества StudyChess </p>
    </div>
  </section>
  <section class="course_in">
    <div class="container">
      <h2>Тема курса: {{$course->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h2>
      <p>{{$course->getTranslatedAttribute('description', 'locale', app()->getLocale())}}</p>
      <h3>Преимущества курса:</h3>
      <div class="advantage">
        <div class="advantage_item">
          <img src="/images/adv1.svg" alt="">
          <p>Если купите курс, вы секономите себе деньги, а также будут некоторые бонусы с нашего сайта</p>
        </div>
        <div class="advantage_item">
          <img src="/images/adv2.svg" alt="">
          <p>После прохождения всего курса, вам дается возможность 1-часовая онлайн конференция с тренером из сообщества StudyChess</p>
        </div>
        <div class="advantage_item">
          <img src="/images/adv3.svg" alt="">
          <p>После каждого видео-урока, мы предлагаем домашние задания, чтобы хорошо понять пройденную тему</p>
        </div>
        <div class="advantage_item">
          <img src="/images/adv4.svg" alt="">
          <p>Домашние задания Грамотно составленны и способствуют лучшему усвоению материала.</p>
        </div>
      </div>
    </div> 
  </section>
  <section class="what_learning">
    <div class="container">
    	<?php echo $course->getTranslatedAttribute('what_learn', 'locale', app()->getLocale()); ?>
    </div>
  </section>
  <section class="video_section">
    <div class="container">
    	@foreach($course->lessons as $lesson)
       <div class="video_item">
         <a href="{{route('get-lesson',[$course->slug ,$lesson->id])}}" class="video_item_img">
           <img src="{{ Voyager::image( $lesson->image ) }}" alt="">
           <span>1</span>
         </a>
         <div class="video_item_text">
           <div class="video_item_text_racet"><img src="/	images/raceta.svg" alt="">Видео-урок</div>
           <h4>{{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h4>
           <div class="video_item_text_info">
             <p><img src="/images/saturn.svg" alt="">{{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</p>
             <p><img src="/images/treug.svg" alt="">1-урок</p>
             <p><img src="/images/clock.svg" alt="">{{$lesson->time}} минут</p>
           </div>
           <div class="video_item_text_about">
             {{$lesson->getTranslatedAttribute('description', 'locale', app()->getLocale())}}
           </div>
           <div class="video_item_text_price">
             <img src="/images/money.svg" alt="">
             {{$lesson->price}}. {{__("сум")}}
           </div>
           <a href="{{route('get-lesson',[$course->slug ,$lesson->id])}}" class="btn_template">Подробнее</a>
         </div>
       </div>
       @endforeach
      
       <a href="#" class="more">Ещё</a>
       <a href="{{route('add-to-cart',['course',$course->id])}}" class="all_buy">Купить весь курс</a>
    </div>
  </section>

@endsection