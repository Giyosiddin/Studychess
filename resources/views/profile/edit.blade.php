@extends('layouts.front')

@section('content')
	
    <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
      <div class="container">
          <h1>{{__("Личный кабинет")}}</h1>
      </div>
     </section>
    <section class="contact">
      <div class="container">
        <div class="row">
        	<div class="col-4">
              <div class="dropdown sidebar sidebar-md">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li class="dropdown-header"></li>
                      <li class=""><a href="{{route('profile.index')}}">Dashboard</a></li>
                      <li class="active"><a href="{{route('profile.edit')}}">Редактировать</a></li>
                     <!--  <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li> -->
                      <li role="separator" class="divider"></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
                </div>
    				<!-- <aside>
    					<ul>
    						<li><a href="{{route('profile.edit')}}">Редактировать</a></li>
    						<li><a href="#">Item</a></li>
    						<li><a href="#">Item</a></li>
    						<li><a href="#">Item</a></li>
    					</ul>
    				</aside> -->
			   </div>
          <div class="col-lg-8 col-sm-8">
            <div class="contact_form" style="max-width: 100%;">
             <!--  <h4>{{__("МЫ ОТКРЫТЫ К ОБЩЕНИЮ И ГОТОВЫ ОТВЕТИТЬ НА ВСЕ ВАШИ ВОПРОСЫ")}}</h4> -->
              <form action="{{route('profile.edit')}}" method="POST">
                @csrf
                 <div class="form-group">
                   <input type="text" name="name" required="" placeholder="{{__('Имя')}}" value="{{$user->name}}">
                 </div>
                 <div class="form-group">
                   <input type="email" required="" name="email" placeholder="E-mail" value="{{$user->email}}">
                 </div>
                 <div class="form-group">
                   <input type="text" required="" name="phone" placeholder="{{__('Телефон')}}" value="{{$user->phone}}">
                 </div>
                 <div class="form-group">
                   <input type="password" required="" name="password" placeholder="{{__('Создайте пароль')}}">
                 </div>
                 <div class="form-group">
                   <input type="password" required="" name="password_confirmation" placeholder="{{__('Повторите пароль')}}">
                 </div>
                 <button type="submit" class="">{{__("Отправить")}}</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection