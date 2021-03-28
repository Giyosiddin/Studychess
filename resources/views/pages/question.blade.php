@extends('layouts.front')

@section('content')

   <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
        <div class="container">
            <h1>{{$page->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h1>
            <p>{{$page->getTranslatedAttribute('excerpt', 'locale', app()->getLocale())}}</p>
        </div>
    </section>
    <section class="faq">
        <div class="container">
          <h2 class="title_md">{{__("Часто задаваемые вопросы")}}</h2>
            <div class="myaccordion" id="accordion">
            	<?php $i = 1; ?>
            	@foreach($questions as $question)
                <div class="card">
                    <div class="card-header">
                        <h2>
                            <button class="collapsed" data-toggle="collapse" data-target="#collapse<?=$i; ?>" aria-expanded="false" aria-controls="collapse<?=$i; ?>">
                                {{$question->getTranslatedAttribute('question', 'locale', app()->getLocale())}}
                            </button>
                        </h2>
                    </div>
                    <div id="collapse<?=$i; ?>" class="collapse" aria-labelledby="heading<?=$i; ?>" data-parent="#accordion" style="">
                        <div class="card-body">
                            <p>{{$question->getTranslatedAttribute('answer', 'locale', app()->getLocale())}}</p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>
        </div>
    </section>
@endsection