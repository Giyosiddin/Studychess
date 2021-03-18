@extends('layouts.front')
@section('content')

  <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>Статья</h1>
      <p>{{$post->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</p>
    </div>
  </section>
  <section class="text_content">
    <div class="container">
      <div class="text_content_main">
       <?php  echo $post->getTranslatedAttribute('content', 'locale', app()->getLocale());  ?>
      </div>
    </div> 
  </section>
@endsection