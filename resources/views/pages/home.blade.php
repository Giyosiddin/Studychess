@extends('layouts.front')
@section('content')
  <section class="general_main for_bg_color" style="background-image: url('images/header-bg.jpg');">
    <div class="container">
      <a href="courses.html" class="to_courses">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25 0C11.1931 0 0 11.1929 0 25C0 38.8071 11.1931 50 25 50C38.8069 50 50 38.8071 50 25C50 11.1929 38.8069 0 25 0ZM33.6406 26.3252L21.1406 34.1377C20.8877 34.2956 20.6001 34.375 20.3125 34.375C20.052 34.375 19.791 34.3102 19.5549 34.1789C19.0582 33.9035 18.75 33.3809 18.75 32.8125V17.1875C18.75 16.6191 19.0582 16.0965 19.5549 15.8211C20.0516 15.5441 20.6589 15.5609 21.1406 15.8623L33.6406 23.6748C34.0973 23.9609 34.375 24.4614 34.375 25C34.375 25.5386 34.0973 26.0392 33.6406 26.3252Z" fill="#FFAC4B" />
        </svg>
        Видео уроки по шахматам
      </a>
      <h1>Изучайте <br> шахматы вместе <br> с нами!</h1>
      <p>Все, чтобы поднять технику игры на следующий уровень</p>
      <a href="#" class="btn_template">Начать изучение</a>
    </div>
  </section>
  <section class="popular_courses">
    <div class="container fifteen">
      <h2>Популярные курсы</h2>
      <div class="row">
        <div class="col-lg-3 col-6">
          <a href="#" class="popular_courses_item">
            <div class="popular_courses_item_img">
              <img src="images/chess_piyoda.svg" alt="">
            </div>
            <div class="popular_courses_item_text">
              <h4>Пешечный эндшпиль</h4>
              <div class="popular_courses_item_text_time">
                <img src="images/clock.svg" alt="">
                16 часов
              </div>
              <div class="popular_courses_item_text_bottom">
                <span>Стоимость курса:</span>
                <b>10$</b>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-6">
          <a href="#" class="popular_courses_item">
            <div class="popular_courses_item_img">
              <img src="images/chess_ot.svg" alt="">
            </div>
            <div class="popular_courses_item_text">
              <h4>Коневой эндшпиль</h4>
              <div class="popular_courses_item_text_time">
                <img src="images/clock.svg" alt="">
                20 часов
              </div>
              <div class="popular_courses_item_text_bottom">
                <span>Стоимость курса:</span>
                <b>12$</b>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-6">
          <a href="#" class="popular_courses_item">
            <div class="popular_courses_item_img">
              <img src="images/chess_piyoda.svg" alt="">
            </div>
            <div class="popular_courses_item_text">
              <h4>Пешечный эндшпиль</h4>
              <div class="popular_courses_item_text_time">
                <img src="images/clock.svg" alt="">
                16 часов
              </div>
              <div class="popular_courses_item_text_bottom">
                <span>Стоимость курса:</span>
                <b>10$</b>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-6">
          <a href="#" class="popular_courses_item">
            <div class="popular_courses_item_img">
              <img src="images/chess_farzin.svg" alt="">
            </div>
            <div class="popular_courses_item_text">
              <h4>Ферзевый эндшпиль ФерзевыйэндшпильФерзевыйэндшпиль</h4>
              <div class="popular_courses_item_text_time">
                <img src="images/clock.svg" alt="">
                14 часов
              </div>
              <div class="popular_courses_item_text_bottom">
                <span>Стоимость курса:</span>
                <b>15$</b>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="text-center">
        <a href="courses.html" class="btn_template">Смотреть все курсы</a>
      </div>
    </div>
  </section>
  <section class="advantage for_bg_color" style="background-image: url('images/chess-bg.jpg'); ">
    <div class="container fifty_space">
      <div class="row">
        <div class="col-lg-7">
          <div class="row fifty_space">
            <div class="col-lg-4">
              <h3>Удобно</h3>
              <p>Вы можете когда хотите и где угодно просматривать уроки</p>
            </div>
            <div class="col-lg-4">
              <h3>ОПЫТ</h3>
              <p>После прохождения курса вы набираетесь больше опыта</p>
            </div>
            <div class="col-lg-4">
              <h3>ТРЕНЕРЫ</h3>
              <p>Вы сможете задать вопрос и получить ответ от автора </p>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="learn_pace">
            <h5>Учитесь в своем собственном темпе</h5>
            <h4>Развивайте свою карьеру, с помощью наших видео-уроков</h4>
            <a href="courses.html" class="btn_template">Начать изучение</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="why_me">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- <span>Особенности наших курсов</span> -->
          <h3>Почему выбирают нас?</h3>
          <p>StudyChess — это сообщество успешных шахматистов. Мы обучаем шахматам с помощью специально разработанным нашим видео-урокам</p>
        </div>
        <div class="col-lg-6 ">
          <div class="why_main_right">
            <div class="why_me_item">
              <div class="why_me_item_img">
                <img src="images/crown.svg" alt="">
              </div>
              <div class="why_me_item_text">
                <h5>Лучшие лидеры отрасли</h5>
                <p>Мы отличаемся тем что, у нас своя методика обучения</p>
              </div>
            </div>
            <div class="why_me_item">
              <div class="why_me_item_img">
                <img src="images/time.svg" alt="">
              </div>
              <div class="why_me_item_text">
                <h5>Учитесь в удобном для вас темпе</h5>
                <p>Вы можете смотреть видео-уроки когда захотите</p>
              </div>
            </div>
            <div class="why_me_item">
              <div class="why_me_item_img">
                <img src="images/magistr.svg" alt="">
              </div>
              <div class="why_me_item_text">
                <h5>ТРЕНЕРЫ</h5>
                <p>Вы сможете задать вопрос и получить ответ от автора </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <section class="our_off for_bg_color" style="background-image: url('images/quotes-bg.jpg');">
        <div class="container"> 
            <h2>Мы предлагаем 3 способа изучать шахматы</h2>
            <div class="our_off_item">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="images/offer1w.svg" alt="">
                    </div>
                    <div class="col-sm-10">
                        <a href="#"><h5>С помощью наших курсов</h5></a>
                        <p>Занимайтесь в удобное для вас время. Временных ограничений по изучению уроков и выполнению домашних заданий нет.</p>
                    </div>
                </div>
            </div>
            <div class="our_off_item">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="images/offer2w.svg" alt="">
                    </div>
                    <div class="col-sm-10">
                        <a href="#"><h5>С помощью наших видео-уроков</h5></a>
                        <p>Скажите НЕТ скучной теории, которой грешат многие другие курсы. Вы получаете навык только во время практики. Именно поэтому в нашем курсе вас ждет много практики и интересных заданий.</p>
                    </div>
                </div>
            </div>
            <div class="our_off_item">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="images/offer3w.svg" alt="">
                    </div>
                    <div class="col-sm-10">
                        <a href="#"><h5>С помощью наших тренеров</h5></a>
                        <p>Вы не останетесь один на один с материалами курса. Вы сможете задать вопрос и в течение 24-х часов гарантированно получите ответ от одного из тренеров нашего сообщества.</p>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <section class="news">
    <div class="container">
      <h2>Новости</h2>
      <div class="swiper-container news_swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="news_inner.html" class="news_swiper_item">
              <div class="news_swiper_item_img">
                <img src="images/news1.jpg" alt="">
              </div>
              <div class="news_swiper_item_text">
                <p>
                  Хикару Накамура - победитель чемпионата по игре в пулю
                </p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="news_inner.html" class="news_swiper_item">
              <div class="news_swiper_item_img">
                <img src="images/news2.jpg" alt="">
              </div>
              <div class="news_swiper_item_text">
                <p>
                  Магнус Карлсен - отказался играть за команду Norway Gnomes
                  Магнус Карлсен - отказался играть за команду Norway Gnomes
                  Магнус Карлсен - отказался играть за команду Norway Gnomes
                </p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="news_inner.html" class="news_swiper_item">
              <div class="news_swiper_item_img">
                <img src="images/news3.jpg" alt="">
              </div>
              <div class="news_swiper_item_text">
                <p>
                  Даниил Дубов дважды победил чемпиона мира Магнуса Карлсена
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="navigations">
        <div class="swiper-button-prev">
          <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.666298 16.1706L14.0167 29.5207C14.3255 29.8298 14.7376 30 15.1772 30C15.6167 30 16.0289 29.8298 16.3376 29.5207L17.3208 28.5378C17.9605 27.8973 17.9605 26.8564 17.3208 26.2169L6.11016 15.0062L17.3332 3.78314C17.642 3.47412 17.8125 3.06217 17.8125 2.6229C17.8125 2.18315 17.642 1.7712 17.3332 1.46194L16.3501 0.479263C16.0411 0.17024 15.6291 0 15.1896 0C14.7501 0 14.3379 0.17024 14.0291 0.479263L0.666298 13.8416C0.356789 14.1516 0.18679 14.5655 0.187767 15.0055C0.18679 15.4472 0.356789 15.8608 0.666298 16.1706Z" fill="white" />
          </svg>
        </div>
        <div class="swiper-button-next">
          <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.3337 13.8294L3.98332 0.479264C3.67454 0.170243 3.26235 0 2.82284 0C2.38334 0 1.97114 0.170243 1.66237 0.479264L0.679203 1.46218C0.0394526 2.10267 0.0394526 3.14363 0.679203 3.78314L11.8898 14.9938L0.666764 26.2169C0.357986 26.5259 0.1875 26.9378 0.1875 27.3771C0.1875 27.8168 0.357986 28.2288 0.666764 28.5381L1.64993 29.5207C1.95895 29.8298 2.3709 30 2.81041 30C3.24991 30 3.66211 29.8298 3.97088 29.5207L17.3337 16.1584C17.6432 15.8484 17.8132 15.4345 17.8122 14.9945C17.8132 14.5528 17.6432 14.1392 17.3337 13.8294Z" fill="white" />
          </svg>
        </div>
      </div>
    </div>
  </section>
  <section class="quotes for_bg_color" style="background-image: url('images/quotes-bg.jpg');">
    <div class="container">
      <h2>Цитаты</h2>
      <div class="swiper-container quotes_swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="quotes_img">
              <img src="images/saveliy.jpg" alt="">
            </div>
            <div class="quotes_text">
              <span>
                <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 22.125H9.03125L5.90625 37.75H18.4672L21.8438 20.875L21.875 0.25H0V22.125ZM3.125 3.375H18.75V20.4062L15.9078 34.625H9.71875L12.8438 19H3.125V3.375Z" fill="white" />
                  <path d="M28.125 0.25V22.125H37.1563L34.0313 37.75H46.5922L49.9688 20.875L50 0.25H28.125ZM46.875 20.4062L44.0328 34.625H37.8437L40.9687 19H31.25V3.375H46.875V20.4062Z" fill="white" />
                </svg>
              </span>
              <p>Победа достается тому, кто сделал ошибку предпоследним...</p>
              <div class="author_quote">Савелий тартаковер</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="quotes_img">
              <img src="images/saveliy.jpg" alt="">
            </div>
            <div class="quotes_text">
              <span>
                <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 22.125H9.03125L5.90625 37.75H18.4672L21.8438 20.875L21.875 0.25H0V22.125ZM3.125 3.375H18.75V20.4062L15.9078 34.625H9.71875L12.8438 19H3.125V3.375Z" fill="white" />
                  <path d="M28.125 0.25V22.125H37.1563L34.0313 37.75H46.5922L49.9688 20.875L50 0.25H28.125ZM46.875 20.4062L44.0328 34.625H37.8437L40.9687 19H31.25V3.375H46.875V20.4062Z" fill="white" />
                </svg>
              </span>
              <p>Победа достается тому, кто сделал ошибку предпоследним... Победа достается тому, кто сделал ошибку предпоследним... </p>
              <div class="author_quote">Савелий тартаковер</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="quotes_img">
              <img src="images/saveliy.jpg" alt="">
            </div>
            <div class="quotes_text">
              <span>
                <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 22.125H9.03125L5.90625 37.75H18.4672L21.8438 20.875L21.875 0.25H0V22.125ZM3.125 3.375H18.75V20.4062L15.9078 34.625H9.71875L12.8438 19H3.125V3.375Z" fill="white" />
                  <path d="M28.125 0.25V22.125H37.1563L34.0313 37.75H46.5922L49.9688 20.875L50 0.25H28.125ZM46.875 20.4062L44.0328 34.625H37.8437L40.9687 19H31.25V3.375H46.875V20.4062Z" fill="white" />
                </svg>
              </span>
              <p>Победа достается тому, кто сделал ошибку предпоследним...</p>
              <div class="author_quote">Савелий тартаковер</div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="quotes_img">
              <img src="images/saveliy.jpg" alt="">
            </div>
            <div class="quotes_text">
              <span>
                <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 22.125H9.03125L5.90625 37.75H18.4672L21.8438 20.875L21.875 0.25H0V22.125ZM3.125 3.375H18.75V20.4062L15.9078 34.625H9.71875L12.8438 19H3.125V3.375Z" fill="white" />
                  <path d="M28.125 0.25V22.125H37.1563L34.0313 37.75H46.5922L49.9688 20.875L50 0.25H28.125ZM46.875 20.4062L44.0328 34.625H37.8437L40.9687 19H31.25V3.375H46.875V20.4062Z" fill="white" />
                </svg>
              </span>
              <p>Победа достается тому, кто сделал ошибку предпоследним... Победа достается тому, кто сделал ошибку предпоследним...</p>
              <div class="author_quote">Савелий тартаковер</div>
            </div>
          </div>
        </div>
        <div class="pagination_style swiper-pagination"></div>
      </div>
    </div>
  </section>

@endsection

