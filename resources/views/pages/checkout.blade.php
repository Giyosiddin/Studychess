@extends('layouts.front')

@section('content')

  <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>{{__("Страница оформления заказа")}}</h1>
    </div>
  </section>
  @if (!Auth::check())
	<section class="registration_block">
		<div class="container login-container">
	    <div class="row">
	        <div class="col-md-6 login-form-1">
	            <h3>{{__("Вход")}}</h3>
	            <form action="{{route('login')}}" method="POST" class="login-form">
                @csrf
	                <div class="form-group">
	                    <input type="text" class="form-control" placeholder="Email *" value="" name="email" />
	                </div>
	                <div class="form-group">
	                    <input type="password" class="form-control" placeholder="{{__('Parol')}}" value="" name="password" />
	                </div>
	                <div class="form-group">
	                    <input type="submit" class="btnSubmit" value="{{__('Войти')}}" />
	                </div>
	                <div class="form-group">
	                    <a href="#" class="ForgetPwd">{{__("Забыли пароль")}}?</a>
	                </div>
	            </form>
	        </div>
	        <div class="col-md-6 login-form-2">
	            <h3>{{__("Регистрация")}}</h3>
	            <form action="{{route('register')}}" method="POST" class="register-form">
                @csrf
	                <div class="form-group">
	                    <input type="text" class="form-control" name="username" placeholder="{{__('Имя')}} *" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="text" class="form-control" name="lastname" placeholder="{{__('Фамилия')}} *" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="text" class="form-control" name="email" placeholder="Email *" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="text" class="form-control" name="prone" placeholder="{{__('Телефон')}}" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="password" class="form-control" name="password" placeholder="{{__('Создайте пароль')}} *" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{__('Повторите пароль')}} *" value="" />
	                </div>
	                <div class="form-group">
	                    <input type="submit" class="btnSubmit" value="{{__('Регистрация')}} " />
	                </div>
	                <!-- <div class="form-group">

	                    <a href="#" class="ForgetPwd">{{__("Забыли пароль")}}?</a>
	                </div> -->
	            </form>
	        </div>
		    </div>
		</div>
	</section>
  <!--Main layout-->
  @else
<main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">{{__("Форма оформления заказа")}}</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Название</th>
                  <th scope="col">Цена</th>
                  <th scope="col">Удалить</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                <tr>
                  <th scope="row">{{$item['id']}}</th>
                  <td>{{$item['title']}}</td>
                  <td>{{$item['price']}}</td>
                  <?php if(isset($item['course_id'])){$type = 'lesson'; }else{ $type = 'course'; } ?>
                  <td><a href="{{route('remove-item',[$order->id, $type ,$item['id']])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true">x</span></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!--Card content-->
         

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">{{__("Выберите способ оплаты")}}</span>
            <!-- <span class="badge badge-secondary badge-pill">3</span> -->
          </h4>
             <p class="text-success">{{__("Сайт временно ограничен, так как мы работаем над настройкой платежной системы. Извините за причиненные неудобства!")}}</p>
  <!-- Promo code -->
          <form class="card p-2">
          <!-- Cart -->

          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <label for="payme">
                  <h6 class="my-0">Payme</h6>
                  <small class="text-muted">Payme description</small>
                </label>
              </div>
              <span class="text-muted"><input type="radio" checked="" name="payment" value="payme" id="payme"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <label for="click">
                  <h6 class="my-0">Click</h6>
                  <small class="text-muted">Click description</small>
                </label>
              </div>
              <span class="text-muted"><input id="click" type="radio" name="payment" value="click"></span>
                
            </li>
<!--             <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li> -->
          </ul>
          <!-- Cart -->

        
            <div class="input-group">
              <!-- <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2"> -->

              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" disabled="" type="button">{{__("Купить")}}</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>

 @endif

@endsection