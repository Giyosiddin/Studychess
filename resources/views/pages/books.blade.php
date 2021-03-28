@extends('layouts.front')

@section('content')

  <section class="general_main for_bg_color" style="background-image: url('/images/header-bg.jpg');">
    <div class="container">
      <h1>{{$page->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h1>
      <p>{{$page->getTranslatedAttribute('excerpt', 'locale', app()->getLocale())}}</p>
    </div>
  </section>
  <section class="books">
    <div class="container fifteen">
      <div class="block_filter">
        <span>{{__("Сортировать по")}}:</span>
        <div class="spacer"></div>
        <select class="selectric-select" id="nicer-select-id" name="">
          <option>Новые и популярные</option>
          <option>Дебют</option>
          <option>Миттельшпиль</option>
          <option>Стратегия</option>
          <option>Этюды и композиции</option>
          <option>Тактика</option>
          <option>Журналы</option>
        </select>
      </div>
      <div class="row">
      	@foreach($books as $book)
        <div class="col-lg-3 col-sm-4 col-6">
          <div class="book_item">
            <div class="book_item_img">
              <img src="{{ Voyager::image( $book->image ) }}" alt="">
              <h5>{{$book->getTranslatedAttribute('name', 'locale', app()->getLocale())}}</h5>
            </div>
            <div class="book_item_bottom">
              <div class="drops">
                <span>{{__("Подробнее")}}</span>
                <div class="drops_main">
                  <p>{{$book->getTranslatedAttribute('description', 'locale', app()->getLocale())}}</p>
                  <p>{{__("Размер")}}: {{$book->size}}</p>
                  <p>{{__("Автор")}}: {{$book->getTranslatedAttribute('author', 'locale', app()->getLocale())}}</p>
                </div>
              </div>
              <a href="book.rar">
                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M74.5 2C72.0382 -0.461758 60.4476 9.50396e-05 56.966 0.000231758L13.0339 -4.16785e-05C5.84691 0.000231758 -10 -1.68652 -10 5.49996L-9 64.5C-9 71.6869 5.84719 70 13.0339 70H56.966C64.1529 70 76 71.6869 76 64.5L70 13.034C70 9.5525 76.9618 4.46176 74.5 2ZM22.6769 29.7355C23.4776 28.9347 24.776 28.9347 25.5771 29.7355L32.9492 37.1076L32.9489 15.2303C32.9489 14.0977 33.8671 13.1795 34.9997 13.1795C36.1324 13.1795 37.0505 14.0977 37.0505 15.2303L37.0508 37.1071L44.4224 29.7352C45.2231 28.9344 46.5217 28.9344 47.3226 29.7352C48.1235 30.536 48.1235 31.8345 47.3227 32.6354L36.45 43.5084C36.0653 43.8931 35.5437 44.1091 34.9999 44.1091C34.4561 44.1091 33.9344 43.8931 33.55 43.5084L22.6771 32.6357C21.876 31.8349 21.876 30.5364 22.6769 29.7355ZM54.7698 56.8203H15.2305C14.098 56.8203 13.1797 55.9021 13.1797 54.7695C13.1797 53.6369 14.098 52.7187 15.2305 52.7187H54.7697C55.9021 52.7187 56.8204 53.6369 56.8204 54.7695C56.8206 55.9021 55.9022 56.8203 54.7698 56.8203Z" fill="#323232" />
                </svg>
              </a>
            </div>
          </div>
        </div>
       @endforeach
      <!-- <nav class="pagination_nav">
        <ul class="pagination">
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
        </ul>
      </nav> -->
    </div>
  </section>

@endsection