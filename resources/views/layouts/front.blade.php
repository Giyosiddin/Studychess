<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('font/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <title>Study-Chess</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="header_main">
        <a href="{{route('home')}}" class="logo">
          <img src="/images/logo.svg" alt="">
        </a>
        {{menu('main', 'common.menu') }}
        <div class="right_header">
          <div class="languages">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a rel="alternate" hreflang="{{ $localeCode }}" class="{{ $properties['name'] }} <?php if (App::isLocale($localeCode)) { echo 'active';} ?> " href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['name'] }}
                </a>
            @endforeach
          </div>
           @guest
               <a href="#" data-fancybox data-src="#enter_site" class="user">
                    <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                      <path d="m218.667969 240h-202.667969c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h202.667969c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
                      <path d="m138.667969 320c-4.097657 0-8.191407-1.558594-11.308594-4.691406-6.25-6.253906-6.25-16.386719 0-22.636719l68.695313-68.691406-68.695313-68.671875c-6.25-6.253906-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l80 80c6.25 6.25 6.25 16.382813 0 22.636719l-80 80c-3.136719 3.132812-7.234375 4.691406-11.328125 4.691406zm0 0" />
                      <path d="m341.332031 512c-23.53125 0-42.664062-19.136719-42.664062-42.667969v-384c0-18.238281 11.605469-34.515625 28.882812-40.511719l128.171875-42.730468c28.671875-8.789063 56.277344 12.480468 56.277344 40.578125v384c0 18.21875-11.605469 34.472656-28.863281 40.488281l-128.214844 42.753906c-4.671875 1.449219-9 2.089844-13.589844 2.089844zm128-480c-1.386719 0-2.558593.171875-3.816406.554688l-127.636719 42.558593c-4.183594 1.453125-7.210937 5.675781-7.210937 10.21875v384c0 7.277344 7.890625 12.183594 14.484375 10.113281l127.636718-42.558593c4.160157-1.453125 7.210938-5.675781 7.210938-10.21875v-384c0-5.867188-4.777344-10.667969-10.667969-10.667969zm0 0" />
                      <path d="m186.667969 106.667969c-8.832031 0-16-7.167969-16-16v-32c0-32.363281 26.300781-58.667969 58.664062-58.667969h240c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16h-240c-14.699219 0-26.664062 11.96875-26.664062 26.667969v32c0 8.832031-7.167969 16-16 16zm0 0" />
                      <path d="m314.667969 448h-85.335938c-32.363281 0-58.664062-26.304688-58.664062-58.667969v-32c0-8.832031 7.167969-16 16-16s16 7.167969 16 16v32c0 14.699219 11.964843 26.667969 26.664062 26.667969h85.335938c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" /></svg>
                    {{__("Вход")}}
                  </a>
            @endguest
            @auth
                <a href="{{ route('profile.index') }}" class="user">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="">
                            <path
                                d="M19 5V19H5V5H19ZM19 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM12 12C10.35 12 9 10.65 9 9C9 7.35 10.35 6 12 6C13.65 6 15 7.35 15 9C15 10.65 13.65 12 12 12ZM12 8C11.45 8 11 8.45 11 9C11 9.55 11.45 10 12 10C12.55 10 13 9.55 13 9C13 8.45 12.55 8 12 8ZM18 18H6V16.47C6 13.97 9.97 12.89 12 12.89C14.03 12.89 18 13.97 18 16.47V18ZM8.31 16H15.69C15 15.44 13.31 14.88 12 14.88C10.69 14.88 8.99 15.44 8.31 16Z"/>
                        </g>
                    </svg>
                </a>
            @endauth
        </div>
        <div class="animation_burger">
          <svg viewBox="0 0 120 120">
            <g>
              <path class="line top" d="M35,35h50c14.1,0,50.6,13,20.5,53.5s-121.9,21.6-94.4-40.3S111.6,8.4,85,35L35,85" />
              <path class="line bottom" d="M35,85h50c14.1,0,50.6-13,20.5-53.5S-16.4,9.9,11.1,71.8S111.6,111.6,85,85L35,35" />
              <line class="line cross" x1="35" y1="60" x2="85" y2="60" />
            </g>
          </svg>
        </div>
      </div>
    </div>
  </header>
      @yield('content')
  <footer>
    <div class="container fifty_space">
      <div class="row">
        <div class="col-lg-5 left_footer">
          <a href="{{route('home')}}" class="logo">
            <img src="/images/logo_black.svg" alt="">
          </a>
          <h5>{{__("О нас")}}</h5>
          <p>{{__("Мы сообщество успешных шахматистов. Мы обучаем шахматам с помощью специально разработанным нашим видео-урокам")}}</p>
        </div>
        <div class="col-lg-7 right_footer">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <h5>{{__("Информация")}}</h5>
             {{menu('main', 'common.menu') }}
            </div>
            <div class="col-lg-7 col-sm-6">
              <h5>Контакты</h5>
              <div class="socials">
                <a href="tel: +998946082027">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.4941 28.8008L27.5824 32.4616C27.3732 32.8627 26.8975 33.0441 26.4742 32.8841C22.1577 31.2501 18.7506 27.8422 17.118 23.5252C16.958 23.1019 17.1393 22.6263 17.5404 22.417L21.2012 20.5062L20.0468 13.9654C18.6643 13.1872 16.9728 13.2016 15.6034 14.0024C14.234 14.8033 13.3926 16.2708 13.3931 17.8572C13.4048 28.2075 21.7928 36.5955 32.1431 36.6072C33.7287 36.6072 35.1957 35.7663 35.9966 34.3973C36.7974 33.0288 36.8122 31.3377 36.0349 29.9553L29.4941 28.8008Z" />
                    <path d="M25 0C11.193 0 0 11.193 0 25C0 38.807 11.193 50 25 50C38.807 50 50 38.807 50 25C49.9843 11.1995 38.8005 0.0156948 25 0ZM32.1429 38.3929C20.8064 38.3802 11.6198 29.1936 11.6071 17.8571C11.6076 15.5457 12.8836 13.4229 14.9248 12.3383C16.9665 11.254 19.4397 11.3848 21.3553 12.6787C21.5559 12.8139 21.6928 13.0249 21.7346 13.2634L23.0739 20.8409C23.1415 21.2245 22.9531 21.6073 22.6079 21.7874L19.0901 23.625C20.5287 26.8773 23.1271 29.4769 26.3785 30.9169L28.2144 27.3948C28.3944 27.0495 28.7772 26.8611 29.1609 26.9287L36.7392 28.268C36.9773 28.3098 37.1878 28.4463 37.323 28.6464C38.6161 30.562 38.7464 33.0353 37.6617 35.076C36.5766 37.1172 34.4543 38.3929 32.1429 38.3929Z" />
                  </svg>
                  +998 94 608-20-27
                </a>
                <a href="mailto: nigmatovortik@mail.ru">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.0866 16.0715H14.9136L25.0001 24.7172L35.0866 16.0715Z" />
                    <path d="M25.0002 26.7856C24.787 26.7856 24.5808 26.7093 24.4191 26.5702L13.3931 17.1194V33.9285H36.6074V17.1194L25.5814 26.5702C25.4196 26.7093 25.2134 26.7856 25.0002 26.7856Z" />
                    <path d="M25 0C11.193 0 0 11.193 0 25C0 38.807 11.193 50 25 50C38.807 50 50 38.807 50 25C49.9843 11.1995 38.8005 0.0156948 25 0ZM38.3929 34.8214C38.3929 35.3145 37.9931 35.7143 37.5 35.7143H12.5C12.0069 35.7143 11.6071 35.3145 11.6071 34.8214V15.1786C11.6071 14.6855 12.0069 14.2857 12.5 14.2857H37.5C37.9931 14.2857 38.3929 14.6855 38.3929 15.1786V34.8214Z" />
                  </svg>
                  nigmatovortik@mail.ru
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="bottom_footer">
        <a href="#">
          <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M41.6992 35C41.6992 38.7 38.7 41.6992 35 41.6992C31.3 41.6992 28.3008 38.7 28.3008 35C28.3008 31.3 31.3 28.3008 35 28.3008C38.7 28.3008 41.6992 31.3 41.6992 35Z" />
            <path d="M50.6673 23.1473C50.3453 22.2746 49.8315 21.4847 49.1639 20.8364C48.5156 20.1688 47.7262 19.6551 46.8531 19.333C46.1449 19.058 45.0811 18.7306 43.1216 18.6414C41.0019 18.5448 40.3664 18.5239 35.0002 18.5239C29.6334 18.5239 28.9979 18.5442 26.8788 18.6409C24.9193 18.7306 23.8549 19.058 23.1473 19.333C22.2741 19.6551 21.4843 20.1688 20.8364 20.8364C20.1689 21.4847 19.6551 22.2741 19.3325 23.1473C19.0575 23.8554 18.7301 24.9198 18.6409 26.8793C18.5443 28.9984 18.5234 29.6339 18.5234 35.0007C18.5234 40.3669 18.5443 41.0024 18.6409 43.1221C18.7301 45.0815 19.0575 46.1454 19.3325 46.8535C19.6551 47.7267 20.1683 48.5161 20.8359 49.1644C21.4843 49.832 22.2736 50.3457 23.1468 50.6678C23.8549 50.9434 24.9193 51.2707 26.8788 51.3599C28.9979 51.4566 29.6329 51.4769 34.9996 51.4769C40.3669 51.4769 41.0025 51.4566 43.1211 51.3599C45.0805 51.2707 46.1449 50.9434 46.8531 50.6678C48.6058 49.9917 49.9912 48.6063 50.6673 46.8535C50.9423 46.1454 51.2697 45.0815 51.3594 43.1221C51.4561 41.0024 51.4764 40.3669 51.4764 35.0007C51.4764 29.6339 51.4561 28.9984 51.3594 26.8793C51.2702 24.9198 50.9429 23.8554 50.6673 23.1473ZM35.0002 45.3203C29.3002 45.3203 24.6795 40.7001 24.6795 35.0001C24.6795 29.3001 29.3002 24.68 35.0002 24.68C40.6996 24.68 45.3203 29.3001 45.3203 35.0001C45.3203 40.7001 40.6996 45.3203 35.0002 45.3203ZM45.7283 26.6838C44.3964 26.6838 43.3165 25.6039 43.3165 24.272C43.3165 22.94 44.3964 21.8602 45.7283 21.8602C47.0603 21.8602 48.1401 22.94 48.1401 24.272C48.1396 25.6039 47.0603 26.6838 45.7283 26.6838Z" />
            <path d="M35 0C15.673 0 0 15.673 0 35C0 54.327 15.673 70 35 70C54.327 70 70 54.327 70 35C70 15.673 54.327 0 35 0ZM54.9764 43.2859C54.8792 45.4253 54.539 46.886 54.0424 48.1645C52.9983 50.8642 50.8642 52.9983 48.1645 54.0424C46.8865 54.539 45.4253 54.8787 43.2864 54.9764C41.1433 55.0742 40.4586 55.0977 35.0005 55.0977C29.5419 55.0977 28.8578 55.0742 26.7141 54.9764C24.5752 54.8787 23.114 54.539 21.836 54.0424C20.4945 53.5377 19.28 52.7467 18.276 51.724C17.2538 50.7205 16.4629 49.5055 15.9582 48.1645C15.4615 46.8865 15.1213 45.4253 15.0241 43.2864C14.9253 41.1427 14.9023 40.4581 14.9023 35C14.9023 29.5419 14.9253 28.8573 15.0236 26.7141C15.1208 24.5747 15.4604 23.114 15.9571 21.8355C16.4618 20.4945 17.2533 19.2795 18.276 18.276C19.2795 17.2533 20.4945 16.4623 21.8355 15.9576C23.114 15.461 24.5747 15.1213 26.7141 15.0236C28.8573 14.9258 29.5419 14.9023 35 14.9023C40.4581 14.9023 41.1427 14.9258 43.2859 15.0241C45.4253 15.1213 46.886 15.461 48.1645 15.9571C49.5055 16.4618 50.7205 17.2533 51.7245 18.276C52.7467 19.28 53.5382 20.4945 54.0424 21.8355C54.5396 23.114 54.8792 24.5747 54.977 26.7141C55.0747 28.8573 55.0977 29.5419 55.0977 35C55.0977 40.4581 55.0747 41.1427 54.9764 43.2859Z" />
          </svg>
        </a>
        <a href="#">
          <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.6406 41.5572L42.0257 35L30.6406 28.4429V41.5572Z" />
            <path d="M35 0C15.673 0 0 15.673 0 35C0 54.327 15.673 70 35 70C54.327 70 70 54.327 70 35C70 15.673 54.327 0 35 0ZM56.8697 35.0358C56.8697 35.0358 56.8697 42.1339 55.9692 45.5567C55.4646 47.4302 53.9874 48.9074 52.1139 49.4115C48.6911 50.3125 35 50.3125 35 50.3125C35 50.3125 21.3447 50.3125 17.8861 49.3758C16.0126 48.8716 14.5354 47.3939 14.0308 45.5204C13.1298 42.1339 13.1298 35 13.1298 35C13.1298 35 13.1298 27.9024 14.0308 24.4796C14.5349 22.6061 16.0484 21.0926 17.8861 20.5885C21.3089 19.6875 35 19.6875 35 19.6875C35 19.6875 48.6911 19.6875 52.1139 20.6242C53.9874 21.1284 55.4646 22.6061 55.9692 24.4796C56.906 27.9024 56.8697 35.0358 56.8697 35.0358Z" />
          </svg>
        </a>
        <a href="#">
          <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M70 35C70 15.668 54.332 0 35 0C15.668 0 0 15.668 0 35C0 54.332 15.668 70 35 70C35.2051 70 35.4102 70 35.6152 69.9863V42.752H28.0957V33.9883H35.6152V27.5352C35.6152 20.0566 40.1816 15.9824 46.8535 15.9824C50.0527 15.9824 52.8008 16.2148 53.5938 16.3242V24.1445H49C45.377 24.1445 44.666 25.8672 44.666 28.3965V33.9746H53.3477L52.2129 42.7383H44.666V68.6465C59.2949 64.4492 70 50.9824 70 35Z" />
          </svg>
        </a>
        <a data-fancybox data-src="#enter_site" class="join_us"><img src="images/link.svg" alt="">Присоединяйтесь</a>
      </div>
    </div>
  </footer>
</body>
<!-- *******************POPUP**************** -->
<div id="enter_site" style="display: none;" class="popup_block">
  <h2>{{__("Вход")}}</h2>
  <form action="{{route('login')}}" method="POST" id="login_form">
    @csrf
    <!-- <div class="form-group">
      <label for="">Имя<span class="star">*</span></label>
      <input type="text" required="">
    </div> -->
    <div class="form-group">
      <label for="">E-mail<span class="star">*</span></label>
      <input type="email" required="" name="email">
    </div>
    <div class="form-group">
      <label for="">{{__("Parol")}}<span class="star">*</span></label>
      <input type="password" required="" name="password">
    </div>
    <a data-fancybox data-src="" class="forget_password">{{__("Забыли пароль")}}?</a>
    <button type="submit" class="btn_template">{{__("Войти")}}</button>
    <p class="last_title_form">{{__("Ещё нет аккаунта? Тогда")}} <a data-fancybox data-src="#registration">{{__("зарегистрируйтесь")}}!</a></p>
  </form>
</div>
<!-- *******************POPUP**************** -->
<!-- *******************POPUP**************** -->
<div id="registration" style="display: none;" class="popup_block">
  <h2>{{__("Регистрация")}}</h2>
  <form action="{{route('register')}}" method="POST" id="register_form">
    @csrf
    <div class="form-group">
      <label for="">{{__("Имя")}} <span class="star">*</span></label>
      <input type="text" name="username" required="">
    </div>
    <div class="form-group">
      <label for="">{{__("Фамилия")}}<span class="star">*</span></label>
      <input type="text" name="last_name" required="">
    </div>
    <div class="form-group">
      <label for="">E-mail<span class="star">*</span></label>
      <input type="email" required="" name="email">
    </div>
    <div class="form-group">
      <label for="">{{__("Телефон")}}<span class="star">*</span></label>
      <input type="phone" required="" name="phone">
    </div>
    <div class="form-group">
      <label for="">{{__("Создайте пароль")}}<span class="star">*</span></label>
      <input type="password" required="" name="password">
    </div>
    <div class="form-group">
      <label for="">{{__("Повторите пароль")}}<span class="star">*</span></label>
      <input type="password" required="" name="password_confirmation">
    </div>
    <button type="submit" class="btn_template">{{__("Регистрация")}} </button>
    <p class="last_title_form">{{__("Уже есть аккаунт? Тогда")}}<a data-fancybox data-src="#enter_site">{{__("авторизуйтесь")}}!</a></p>
  </form>
</div>
<!-- *******************POPUP**************** -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
  function submitForm(form){
      var url = form.attr("action");
      var formData = form.serialize();
      // $(form).find("input[name]").each(function (index, node) {
      //     formData[node.name] = node.value;
      // });
      $.post(url, formData).done(function (data) {
          console.log(data);
      }).fail(function(error) {
          var errors = JSON.parse(error);
      console.log(errors);
      })
      .always(function() {
          location.reload(true);
      });
  }
  $('#login_form').on('submit', function(e){
      e.preventDefault();
      // $(this)
      submitForm($(this));
  });
   

</script>

</html>