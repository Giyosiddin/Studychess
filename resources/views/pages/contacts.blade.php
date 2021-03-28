@extends('layouts.front')

@section('content')

    <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
        <div class="container">
             <h1>{{$page->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h1>
            <p>{{$page->getTranslatedAttribute('excerpt', 'locale', app()->getLocale())}}</p>
        </div>
    </section>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <h2>{{__("пишите нам, если")}}</h2>
            <div class="contact_item">
              <img src="/images/settings.svg" alt="">
              <p>{{__("у вас есть вопросы по использованию возможностей нашего проекта")}}</p>
            </div>
            <div class="contact_item">
              <img src="/images/edit.svg" alt="">
              <p>{{__("нужна помощь с регистрацией на курсы")}}</p>
            </div>
            <div class="contact_item">
              <img src="/images/light-bulb.svg" alt="">
              <p>{{__("у вас есть вопросы по использованию возможностей нашего проекта")}}</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="contact_form">
              <h4>{{__("МЫ ОТКРЫТЫ К ОБЩЕНИЮ И ГОТОВЫ ОТВЕТИТЬ НА ВСЕ ВАШИ ВОПРОСЫ")}}</h4>
              <form action="#">
                 <div class="form-group">
                   <input type="text" required="" placeholder="{{__('Имя')}}*" style="background-image: url('/images/user.svg')">
                 </div>
                 <div class="form-group">
                   <input type="email" required="" placeholder="E-mail*" style="background-image: url('/images/mail.svg')">
                 </div>
                 <div class="form-group">
                   <input type="tel" required="" placeholder="{{__('Телефон')}}*" style="background-image: url('/images/phone.svg')">
                 </div>
                 <div class="form-group">
                   <textarea placeholder="{{__('Сообщение')}}*" class="autosize" required=""></textarea>
                 </div>
                 <button type="submit" class="">{{__("Отправить")}}</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection