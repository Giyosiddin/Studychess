@foreach($lessons as $lesson)
	<div class="col-xl-3 col-lg-4 col-md-6">
	    <div class="video_item_unit">
	      <a href="{{route('get-lesson',[$lesson->course->slug, $lesson->id])}}" class="video_item_unit_img">
	        <img src="{{ Voyager::image( $lesson->image ) }}" alt="">
	      </a>
	      <div class="video_item_unit_text">
	        <h5>{{$lesson->getTranslatedAttribute('title', 'locale', app()->getLocale())}}</h5>
	        <div class="video_item_unit_text_about">
	          <div class="video_item_unit_text_price">
	            <img src="/images/money.svg" alt="">
	            {{$lesson->price}}. {{__("сум")}}
	          </div>
	          <a href="{{route('get-lesson',[$lesson->course->slug, $lesson->id])}}">{{__("Подробнее")}}</a>
	        </div>
	        <a href="{{route('add-to-cart',['lesson',$lesson->id])}}" class="to_cart btn_template">{{__("Добавить корзину")}}</a>
	      </div>
	    </div>
	</div>
@endforeach