@extends('layouts.front')

@section('content')

 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>{{__("Курс")}}</h1>
      <p> {{$course->getTranslatedAttribute('short_text', 'locale', app()->getLocale())}}</p>
    </div>
  </section>
  <section class="course_in">
    <div class="container">
      <h2>{{__("Тема курса")}}: {{$course->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h2>
      <p>{{$course->getTranslatedAttribute('description', 'locale', app()->getLocale())}}</p>
      <h3>{{__('Преимущества курса:')}}</h3>
      <div class="advantage">
        @foreach($course_details as $detail)
        <div class="advantage_item">
          <img src="{{ Voyager::image( $detail->icon ) }}" alt="">
          <p>{{$detail->getTranslatedAttribute('text', 'locale', app()->getLocale())}}</p>
        </div>
        @endforeach
        <!-- <div class="advantage_item">
          <img src="{{url('images/adv2.svg')}}" alt="">
          <p>После прохождения всего курса, вам дается возможность 1-часовая онлайн конференция с тренером из сообщества StudyChess</p>
        </div>
        <div class="advantage_item">
          <img src="/images/adv3.svg" alt="">
          <p>После каждого видео-урока, мы предлагаем домашние задания, чтобы хорошо понять пройденную тему</p>
        </div>
        <div class="advantage_item">
          <img src="/images/adv4.svg" alt="">
          <p>Домашние задания Грамотно составленны и способствуют лучшему усвоению материала.</p>
        </div> -->
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
      <div class="lessons">
      	@foreach($lessons as $lesson)
         <div class="video_item" data-page="{{$lessons->currentPage()}}">
           <a href="{{route('get-lesson',[$course->slug ,$lesson->id])}}" class="video_item_img">
             <img src="{{ Voyager::image( $lesson->image ) }}" alt="">
             <span>{{$lesson->sequence}}</span>
           </a>
           <div class="video_item_text">
             <div class="video_item_text_racet"><img src="/	images/raceta.svg" alt="">{{__("Видео-урок")}}</div>
             <h4>{{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h4>
             <div class="video_item_text_info">
               <p><img src="/images/saturn.svg" alt="">{{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</p>
               <p><img src="/images/treug.svg" alt="">{{$lesson->sequence}}-{{__("урок")}}</p>
               <p><img src="/images/clock.svg" alt="">{{$lesson->time}} {{__("минут")}}</p>
             </div>
             <div class="video_item_text_about">
               {{$lesson->getTranslatedAttribute('description', 'locale', app()->getLocale())}}
             </div>
             <div class="video_item_text_price">
               <img src="/images/money.svg" alt="">
               {{$lesson->price}}. {{__("сум")}}
             </div>
             <a href="{{route('get-lesson',[$course->slug ,$lesson->id])}}" class="btn_template">{{__("Подробнее")}}</a>
           </div>
         </div>
         @endforeach
       </div>
       {{$lessons->links()}}
        @if($lessons->lastPage() > $lessons->currentPage())
           <a href="#" class="more">{{__("Ещё")}}</a>
        @endif
       <a href="{{route('add-to-cart',['course',$course->id])}}" class="all_buy">{{__("Купить весь курс")}}</a>
    </div>
  </section>
<script type="text/javascript">

</script>
@endsection