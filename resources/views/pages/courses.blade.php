@extends('layouts.front')

@section('content')

 <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <a href="#" class="to_courses">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25 0C11.1931 0 0 11.1929 0 25C0 38.8071 11.1931 50 25 50C38.8069 50 50 38.8071 50 25C50 11.1929 38.8069 0 25 0ZM33.6406 26.3252L21.1406 34.1377C20.8877 34.2956 20.6001 34.375 20.3125 34.375C20.052 34.375 19.791 34.3102 19.5549 34.1789C19.0582 33.9035 18.75 33.3809 18.75 32.8125V17.1875C18.75 16.6191 19.0582 16.0965 19.5549 15.8211C20.0516 15.5441 20.6589 15.5609 21.1406 15.8623L33.6406 23.6748C34.0973 23.9609 34.375 24.4614 34.375 25C34.375 25.5386 34.0973 26.0392 33.6406 26.3252Z" fill="#FFAC4B" />
        </svg>
          {{__("Видео уроки по шахматам")}}
      </a>
      <h1><?php echo __("Изучайте шахматы вместе с нами!",['br' => "<br>",'br2' => "<br>"]);  ?></h1>
      <p>{{__("Все, чтобы поднять технику игры на следующий уровень")}}</p>
      <a href="#" class="btn_template">{{__("Начать изучение")}}</a>
    </div>
  </section>
  <section class="course_in">
    <div class="container">
      <h2 style="text-transform: uppercase;">{{__("эффективные видео-уроки")}}</h2>
      <div class="tab_main">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a data-target="#all" data-toggle="tab" class="active show">{{__("Курсы")}}</a></li>
          <li><a data-target="#online" data-toggle="tab">{{__("Видео-уроки")}} </a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane in active" id="all">
            <!-- <div class="block_filter">
              <span>Сортировать по:</span>
              <div class="spacer"></div>
              <select class="selectric-select" id="nicer-select-id" name="">
                <option>Курсы</option>
                <option>1 разряд</option>
                <option>2 разряд</option>
                <option>3 разряд</option>
                <option>4 разряд</option>
              </select>
            </div> -->
            @foreach($courses as $course)
            <div class="video_item">
              <a href="{{route('get-course',$course->slug)}}" class="video_item_img not_number">
                <img src="{{ Voyager::image( $course->image ) }}" alt="">
              </a>
              <div class="video_item_text">
                <div class="video_item_text_racet"><img src="/images/raceta.svg" alt="">Видео-урок</div>
                <h4>{{$course->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h4>
                <div class="video_item_text_info">
                  <p><img src="/images/saturn.svg" alt="">{{$course->getTranslatedAttribute('for_who', 'locale', app()->getLocale())}}</p>
                  <p><img src="/images/treug.svg" alt="">{{count($course->lessons)}}-{{__("урок")}}</p>
                  <p><img src="/images/clock.svg" alt="">{{$course->getTranslatedAttribute('time', 'locale', app()->getLocale())}}</p>
                </div>
                <div class="video_item_text_about">
                  {{$course->getTranslatedAttribute('description', 'locale', app()->getLocale())}}
                </div>
                <div class="video_item_text_price">
                  <img src="/images/money.svg" alt="">
                  {{$course->price}}. {{__("сум")}}
                </div>
                <a href="{{route('get-course',$course->slug)}}" class="btn_template">{{__("Начать изучение")}}</a>
              </div>
            </div>
            @endforeach
          </div>
          <div role="tabpanel" class="tab-pane fade fifteen" id="online">
            <div class="block_filter">
              <span>{{__("Сортировать по")}}:</span>
              <div class="spacer"></div>
              <select class="selectric-select" id="nicer-select-id" name="">
                <option>{{__("Курсы")}}</option>
                <option>1 разряд</option>
                <option>2 разряд</option>
                <option>3 разряд</option>
                <option>4 разряд</option>
              </select>
            </div>
            <div class="row">
            	@foreach($lessons as $lesson)
            	<div class="col-xl-3 col-lg-4 col-md-6">
	                <div class="video_item_unit">
	                  <a href="{{route('get-lesson',[$lesson->course->slug, $lesson->id])}}" class="video_item_unit_img">
	                    <img src="{{ Voyager::image( $lesson->image ) }}" alt="">
	                  </a>
	                  <div class="video_item_unit_text">
	                    <h5>{{$lesson->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</h5>
	                    <div class="video_item_unit_text_about">
	                      <div class="video_item_unit_text_price">
	                        <img src="images/money.svg" alt="">
	                        {{$lesson->price}}. {{__("сум")}}
	                      </div>
	                      <a href="{{route('get-lesson',[$lesson->course->slug, $lesson->id])}}">{{__("Подробнее")}}</a>
	                    </div>
	                    <a href="#" class="to_cart btn_template">{{__("Добавить корзину")}}</a>
	                  </div>
	                </div>
              	</div>
              @endforeach
            </div>
            <nav class="pagination_nav">
            	{{$lessons->links()}}
              <!-- <ul class="pagination">
                <li class="page-item"><a href="#">
                    <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.666298 16.1706L14.0167 29.5207C14.3255 29.8298 14.7376 30 15.1772 30C15.6167 30 16.0289 29.8298 16.3376 29.5207L17.3208 28.5378C17.9605 27.8973 17.9605 26.8564 17.3208 26.2169L6.11016 15.0062L17.3332 3.78314C17.642 3.47412 17.8125 3.06217 17.8125 2.6229C17.8125 2.18315 17.642 1.7712 17.3332 1.46194L16.3501 0.479263C16.0411 0.17024 15.6291 0 15.1896 0C14.7501 0 14.3379 0.17024 14.0291 0.479263L0.666298 13.8416C0.356789 14.1516 0.18679 14.5655 0.187767 15.0055C0.18679 15.4472 0.356789 15.8608 0.666298 16.1706Z" fill="white"></path>
                    </svg>
                  </a></li>
                <li class="page-item"><a href="#">1</a></li>
                <li class="page-item"><a href="#" class="active">2</a></li>
                <li class="page-item"><a href="#">3</a></li>
                <li class="page-item"><a href="#">
                    <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.3337 13.8294L3.98332 0.479264C3.67454 0.170243 3.26235 0 2.82284 0C2.38334 0 1.97114 0.170243 1.66237 0.479264L0.679203 1.46218C0.0394526 2.10267 0.0394526 3.14363 0.679203 3.78314L11.8898 14.9938L0.666764 26.2169C0.357986 26.5259 0.1875 26.9378 0.1875 27.3771C0.1875 27.8168 0.357986 28.2288 0.666764 28.5381L1.64993 29.5207C1.95895 29.8298 2.3709 30 2.81041 30C3.24991 30 3.66211 29.8298 3.97088 29.5207L17.3337 16.1584C17.6432 15.8484 17.8132 15.4345 17.8122 14.9945C17.8132 14.5528 17.6432 14.1392 17.3337 13.8294Z" fill="white"></path>
                    </svg>
                  </a></li>
              </ul> -->
            </nav>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

@endsection