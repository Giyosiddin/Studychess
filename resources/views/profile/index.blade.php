@extends('layouts.front')

@section('content')
 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
  <div class="container">
      <h1>{{__("Личный кабинет")}}</h1>
  </div>
 </section>
 <section>
	 <div class="container">	 	
		<div class="wrapper">
			<div class="row">
				<div class="col-4">
					<div class="dropdown sidebar sidebar-md">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="dropdown-header"></li>
                    <li class="active"><a href="{{route('profile.index')}}">Dashboard</a></li>
                    <li class=""><a href="{{route('profile.edit')}}">Редактировать</a></li>
<!--                     <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li> -->
                    <li role="separator" class="divider"></li>
                    <li>
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                  </ul>
                </div>
				</div>
				<div class="col-8">			
					<div class="text m-5">
						      <table class="table table-bordered">
                    <tr>
                      <th>{{__("Имя")}}</th>
                      <th>{{__("Фамилия")}}</th>
                      <th>Email</th>
                      <th>{{__("Телефон")}}</th>
                    </tr>
                    <tr>
                      <td>{{Auth::user()->name}}</td>
                      <td>{{Auth::user()->last_name}}</td>
                      <td>{{Auth::user()->email}}</td>
                      <td>{{Auth::user()->phone}}</td>
                    </tr>      
                  </table>
					</div>
				</div>
			</div>
		</div>
	 </div>	
</section>
@endsection