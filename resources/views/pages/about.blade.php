@extends('layouts.front')
<?php $ways=$page->details()->where('id', 2)->first(); ?>
@section('content')
    <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
        <div class="container">
            <h1>{{$page->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h1>
            <p>{{$page->getTranslatedAttribute('excerpt', 'locale', app()->getLocale())}}</p>
        </div>
    </section>
    <section class="our_best">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="col-sm-3">
                    <img src="/images/about1.svg" alt="">
                </div>
                <div class="col-sm-9">
                    <p>{{__("Наши курсы — это отличная возможность стартовать свою новую карьеру.")}}</p>
                    <p>{{__("Это наш вклад в развитие отрасли. Пока другие только говорят, мы действительно делаем.")}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our_off">
        <div class="container"> 
            <h2>{{$ways->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</h2>
            @foreach($ways->childdetails as $detail)
            <div class="our_off_item">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{Voyager::image($detail->image)}}" alt="">
                    </div>
                    <div class="col-sm-10">
                        <h5>{{$detail->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</h5>
                        <p>{{$detail->getTranslatedAttribute('text', 'locale', app()->getLocale())}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="our_treners">
        <div class="container">
            <h2>{{__("Наши тренеры")}}</h2>
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-lg-3 col-sm-6">
                    <div class="our_trener_item">
                        <img src="{{Voyager::image($teacher->image)}}" alt="">
                        <div class="text">
                            <h5>{{$teacher->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</h5>
                            <p>{{$teacher->getTranslatedAttribute('about_her', 'locale', app()->getLocale())}}</p>
                            <a href="{{$teacher->profile_fide}}"><span>Профиль FIDE</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="our_trener_item">
                        <img src="/images/trener.jpg" alt="">
                        <div class="text">
                            <h5>Акмаль Файзуллаев</h5>
                            <p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat voluptas.</p>
                            <a href="#"><span>Профиль FIDE</span></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

@endsection