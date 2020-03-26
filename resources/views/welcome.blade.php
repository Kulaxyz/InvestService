@extends('layouts.visit')
@section('content')
        <!-- Slider-->
        <section class="section bg-gray-800">
            <div class="slick-group-slider slick-transparent-header bg-gray-700">
                <div class="carousel-parent-outer">
                    <svg class="carousel-parent-shape" width="1216px" height="625px" viewBox="0 0 1216 625" preserveAspectRatio="none">
                        <path fill-rule="evenodd" d="M-0.000,311.382 C-0.000,311.382 62.999,372.037 102.727,273.078 C118.498,233.793 168.280,306.657 186.342,249.138 C203.245,195.310 231.848,195.447 246.067,143.801 C266.856,68.285 291.661,3.867 310.569,0.159 C341.089,-5.826 374.891,182.287 422.852,134.224 C468.160,88.821 511.245,170.842 535.135,177.317 C545.468,180.117 579.312,194.321 613.972,189.287 C635.941,186.097 655.397,155.251 678.475,172.529 C726.537,208.512 730.880,342.989 781.202,397.567 C807.168,425.730 831.757,373.189 862.428,356.869 C890.078,342.156 923.937,365.255 946.043,356.869 C975.409,345.727 998.875,341.716 1015.324,294.624 C1027.442,259.931 1032.880,184.101 1048.770,155.771 C1068.789,120.077 1110.838,156.070 1129.996,129.436 C1169.461,74.571 1216.000,43.251 1216.000,43.251 L1216.000,624.999 L-0.000,624.999 L-0.000,311.382 Z"></path>
                    </svg>
                    <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-dots="true" data-swipe="true" data-items="1" data-fade="true" data-child="#slider-child-carousel" data-for="#slider-child-carousel" data-autoplay="true">
                        <div>
                            <div class="slick-slide-caption">
                                <h6>Ваш способ заработка #1</h6>
                                <h1>Инвестируйте!</h1>
                                <h3 class="decoration-heading-1">Мы меняем мир!</h3>
                                <p>У нашей компания истользует много отраслей в инвестициях чтобы увеличить прибыль.</p>
                                <div class="slick-slide-caption__footer"><a class="button button-primary" href="{{ route('about') }}">Читать дальше</a></div>
                            </div>
                        </div>
{{--                        <div>--}}
{{--                            <div class="slick-slide-caption">--}}
{{--                                <h6>Leading bitcoin exchange</h6>--}}
{{--                                <h1>Easy exchange</h1>--}}
{{--                                <h3 class="decoration-heading-1">For Everyone Worldwide</h3>--}}
{{--                                <p>Our website has been a leading cryptocurrency exchange since day one of Bitcoin distribution. The whole process is easy and secure.</p>--}}
{{--                                <div class="slick-slide-caption__footer"><a class="button button-primary" href="about-us.html">Read More</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div>
                            <div class="slick-slide-caption">
                                <h6>Идеальный инструмент для заработка</h6>
                                <h1>Безопасные инвестиции</h1>
                                <h3 class="decoration-heading-1">Развивающеся сферы</h3>
                                <p>Мы выбираем самые прибыльные сделки на бирже и позволяем вам заработать всесте с нами.</p>
                                <div class="slick-slide-caption__footer"><a class="button button-primary" href="{{ route('about') }}">Читать дальше</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider carousel-child slick-animation-scale" id="slider-child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-items="1" data-slide-to-scroll="1" data-autoplay="true">
                    <div class="item">
                        <div class="slick-img" style="background-image: url(/images/slider-slide-1.jpg);"></div>
                    </div>
{{--                    <div class="item">--}}
{{--                        <div class="slick-img" style="background-image: url(/images/slider-slide-2.jpg);"></div>--}}
{{--                    </div>--}}
                    <div class="item">
                        <div class="slick-img" style="background-image: url(/images/slider-slide-3.jpg);"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome-->
        <section class="section section-xl bg-white">
            <div class="container">
                <div class="row row-50 justify-content-center flex-md-row-reverse align-items-center">
                    <div class="col-md-10 col-lg-6">
                        <p class="text-initial-letter">Добро пожаловать! Помните, что это коммерческий веб-сайт,
                            на котором перечислены кошельки, биржи и информация, связанная с инвестициями.</p>
                        <div class="divider-modern"></div>
                        <p>Основанный в июне 2012 года, Rochacoin является кошельком и платформой для цифровой валюты, где
                            Торговцы и потребители могут совершать сделки с новыми цифровыми валютами, такими как биткойны,
                            эфириум и лайткойн. Биткойн - самая широко используемая альтернативная валюта в мире
                            с общей рыночной капитализацией более 100 миллиардов долларов. Сеть биткойнов состоит из тысяч
                            компьютеров, управляемых людьми по всему миру, которые делают эту криптовалюту безопасной .</p>
                        <div class="group group-middle">
                            <a class="button button-primary" href="{{ route('wallet') }}">
                                Создать кошелёк
                            </a>
                            <a class="button button-default-outline" href="{{ route('contact') }}">Контакты</a>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6">
                        <div class="image-group-1"><img src="/images/about-image-1-399x307.jpg" alt="" width="399" height="307" data-parallax-scroll="{&quot;y&quot;: 110, &quot;from-scroll&quot;: 20, &quot;smoothness&quot;: 30 }"/><img class="shadow-sm" src="/images/about-image-2-421x332.jpg" alt="" width="421" height="332" data-parallax-scroll="{&quot;y&quot;: -50, &quot;from-scroll&quot;: 20, &quot;smoothness&quot;: 30}"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features-->
        <section class="section section-sm section-overlay-2 context-dark">
            <div class="container">
                <div class="row row-50">
                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-graph"></span>
                                <p class="box-elegant__title">Акции</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>На акциях крупных корпорация.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-bag-euro"></span>
                                <p class="box-elegant__title">Валюта</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>Мы зарабатываем на валютных парах.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-oil-pressure"></span>
                                <p class="box-elegant__title">Нефть</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>На скачках курса нефти.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-download"></span>
                                <p class="box-elegant__title">Металлы</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>Cтабильные доходы от драгоценных металлов.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-ship"></span>
                                <p class="box-elegant__title">Торговля</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>Роботизированная торговля.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="box-elegant">
                            <div class="box-elegant__header"><span class="icon box-elegant__icon linearicons-inbox"></span>
                                <p class="box-elegant__title">Криптовалюты</p>
                            </div>
                            <div class="box-elegant__text">
                                <p>Современные надёжные инвестиции.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- What bitcoin offers you-->
        <section class="section section-xl bg-white text-center text-lg-left">
            <div class="container">
                <div class="row row-30">
                    <div class="col-lg-5">
                        <div class="row row-30">
                            <div class="col-12">
                                <h6>Что мы вам предлагаем</h6>
                                <h2>Хотите знать <strong>как</strong> <br class="d-none d-lg-inline-block"> мы зарабатываем?</h2>
                                <p><span style="max-width: 430px;">Одним из способов дохода являются инвестиции в криптовалюту.</span></p>
                            </div>
                            <div class="col-12 wow fadeInUpSmall">
                                <!-- Link Box--><a class="link-box" href="{{ route('wallet') }}"><span class="icon link-box__icon linearicons-mouse-right"></span>
                                    <div class="link-box__main">
                                        <h4>Создать кошелёк</h4>
                                        <p>Зарегистрируйтесь и начните зарабатывать в несколько кликов.</p>
                                    </div></a>
                            </div>
                            <div class="col-12 wow fadeInUpSmall" data-wow-delay=".1s">
                                <p>
                                    Формируя динамичный инвестиционный портфель, мы ежедневно применяем накопленный опыт в разных направлениях, и делаем упор в разных сферах.
                                </p>
                                <p>Формируя динамичный инвестиционный портфель, мы ежедневно применяем накопленный опыт в разных направлениях, и делаем упор в разных сферах.
                                </p>
                                <p>Формируя динамичный инвестиционный портфель, мы ежедневно применяем накопленный опыт в разных направлениях, и делаем упор в разных сферах.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUpSmall" data-wow-delay=".1s">
                        <!-- crypto chart-->
                        <div class="crypto-currency-chart"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works-->
        <section class="section section-lg bg-gray-100 text-center" style="padding-top: 20px !important;">
            <div class="container container-md-smaller">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-12">
                        <h6 class="wow fadeInUpSmall">С чего начать?</h6>
                        <h2 class="wow fadeInUpSmall" data-wow-delay=".1s">
                            <span class="d-inline-block" style="max-width: 570px;">
                                ИНВЕСТИРОВАТЬ С НАМИ НАДЕЖНО И ВЫГОДНО
                            </span>
                        </h2>
                    </div>
                </div>
                <ul class="list-steps">
                    <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".1s">
                        <div class="list-steps__item-counter"></div>
                        <div class="list-steps__item-divider"></div>
                        <div class="list-steps__item-main">
                            <h4><a href="{{ route('wallet') }}">Регистрация</a></h4>
                            <p>
                                Пройдите процедуру регистрации на сайте для открытия счета.
                                Нажмите кнопку «Регистрация» и заполните все необходимые поля
                            </p>
                        </div>
                    </li>
                    <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".2s">
                        <div class="list-steps__item-counter"></div>
                        <div class="list-steps__item-divider"></div>
                        <div class="list-steps__item-main">
                            <h4><a href="{{ route('wallet') }}">Откройте депозит</a></h4>
                            <p>Сделайте инвестицию на удобный срок на сумму от 100 рублей и
                                ваши деньги начнут работать на вас.</p>
                        </div>
                    </li>
                    <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".3s">
                        <div class="list-steps__item-counter"></div>
                        <div class="list-steps__item-divider"></div>
                        <div class="list-steps__item-main">
                            <h4><a href="{{ route('wallet') }}">Распоряжайтесь прибылью</a></h4>
                            <p>По факту окончания периода инвестиции вклад с прибылью будут доступы для вывода
                                или создания нового депозита.
                            </p>
                        </div>
                    </li>
                </ul>
                <div style="margin-top: 60px" class="justify-content-center"><a class="button button-primary" href="{{ route('wallet') }}">
                        Создать кошелёк
                    </a></div>
            </div>
        </section>

        <!-- Be one step ahead-->
        <section class="section bg-gray-700 particles-js-outer section-overlay-1">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row justify-content-center justify-content-xl-between align-items-end">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-lg">
                            <h6 class="wow fadeInLeftSmall">Будьте на шаг впереди</h6>
                            <h2 class="wow fadeInLeftSmall" data-wow-delay=".1s">Получение <strong>80%</strong> от знаний наших экспертов просто.</h2>
                            <p class="lead wow fadeInLeftSmall" data-wow-delay=".15s">Присоединяйтесь к БЕСПЛАТНОМУ курсу по инвестициям..</p>
                            <!-- RD Mailform-->
                            <form class="form form-lg form-inline wow fadeInLeftSmall" data-wow-delay=".2s" method="post" action="{{ route('ticket') }}">
                                @csrf
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="subscribe-form-email">Введите e-mail</label>
                                </div>
                                <div class="form-button">
                                    <button class="button button-primary" type="submit">Отправить</button>
                                </div>
                            </form>
                            <p class="wow fadeInLeftSmall" data-wow-delay=".25s"><span style="opacity: .25;">*Мы обещаем не слать спам.</span></p>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-5">
                        <div class="bitcoin-widget bitcoin-widget_windowed bitcoin-widget_windowed-1"><img class="bitcoin-widget__top-panel" src="/images/decoration-browser-panel-564x36.png" alt="" width="564" height="36"/>
                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feedback-->
        <section class="section bg-gray-100 slider-group_testimonials">
            <div class="slick-slider carousel-child wow fadeIn" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-swiper="true" data-items="1">
                <div class="item"><img src="/images/home-testimonials-1-744x623.png" alt="" width="744" height="623"/>
                </div>
                <div class="item"><img src="/images/home-testimonials-2-744x623.png" alt="" width="744" height="623"/>
                </div>
                <div class="item"><img src="/images/home-testimonials-3-744x623.png" alt="" width="744" height="623"/>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-8 col-lg-7">
                        <h2><strong>Что</strong> говорят люди</h2>
                        <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="true" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item">
                                <blockquote class="quote-classic">
                                    <div class="quote-classic__text">
                                        <p>Я выбрал этот сайт для торговли биткойнами и несколькими другими валютами.
                                            У них есть четкая торговая площадка с хорошей репутацией за последние годы
                                            и множество направлений обмена. Большинство людей, которых я знаю, используют это.
                                            Я надеюсь больше работать с Rochacoin в будущем, и я буду рекомендовать этот
                                            сайт всем своим коллегам и друзьям.</p>
                                    </div>
                                    <div class="quote-classic__meta">
                                        <cite class="quote-classic__cite">Брайан Томпсон</cite>
                                        <p class="quote-classic__info">Бизнесмэн</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="quote-classic">
                                    <div class="quote-classic__text">
                                        <p>Как эксперт по финансам, я искренне верю, что криптовалюты - это будущее.
                                            Я рада сказать, что ваш сайт является идеальным источником для новичков
                                            и профессионалы в торговле и обмене биткойнов, поскольку это позволяет лучше
                                            понять, как это работает. Что еще важнее, ваша команда всегда готова
                                            помочь, если у пользователя есть какие-либо вопросы .</p>
                                    </div>
                                    <div class="quote-classic__meta">
                                        <cite class="quote-classic__cite">Джейн Миллан</cite>
                                        <p class="quote-classic__info">Финансовый Эксперт</p>
                                    </div>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="quote-classic">
                                    <div class="quote-classic__text">
                                        <p>Я начал торговать биткойнами как хобби, и твой сайт был единственным источником
                                            Я нашел в Интернете, чтобы быть полностью надежным. Ваша команда поддержки помогла
                                            я избегаю всех поворотов, которые казались рискованными, и теперь я могу успешно
                                            Обмен и обмен моих биткойнов на вашем сайте. Спасибо за вашу помощь и понимание!</p>
                                    </div>
                                    <div class="quote-classic__meta">
                                        <cite class="quote-classic__cite">Сэм Вильсон</cite>
                                        <p class="quote-classic__info">Дизайнер </p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-extra-large">Отзывы</p>
        </section>

        <!-- CTA-->
        <section class="section parallax-container section-md bg-gray-700 text-center section-overlay-1 text-lg-left" data-parallax-img="/images/home-parallax-1.jpg">
            <div class="parallax-content">
                <div class="container">
                    <div class="row row-30 align-items-center">
                        <div class="col-lg-9 wow fadeInLeftSmall">
                            <h2>Создайте кошелёк с <strong>полным спектром</strong> возможностей!</h2>
                            <p class="big">У нашей компания истользует много отраслей в инвестициях чтобы увеличить прибыль. Присоединяйтесь!</p>
                        </div>
                        <div class="col-lg-3 wow fadeInRightSmall text-lg-right">
                            <a href="{{ route('register') }}">
                                <button class="button button-default-outline">Зарегистрироваться сейчас</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Investing Packages-->
        <section class="section section-md bg-white text-center">
            <div class="container">
                <h6>Инвестировать</h6>
                <h2><span class="d-inline-block" style="max-width: 520px;">Выберите <strong>свой</strong> пакет инвестирования.</span></h2>
                <div class="row row-40 offset-top-1">
                    <div class="col-sm-12 col-md-4"><a class="box-lily" href="{{ route('wallet') }}">
                            <div class="icon box-lily__icon mdi mdi-rocket"></div>
                            <p class="box-lily__title">1 месяц - 5%</p></a></div>
                    <div class="col-sm-12 col-md-4"><a class="box-lily" href="{{ route('wallet') }}">
                            <div class="icon box-lily__icon mdi mdi-star-circle"></div>
                            <p class="box-lily__title">3 месяца - 7%</p></a></div>
                    <div class="col-sm-12 col-md-4"><a class="box-lily" href="{{ route('wallet') }}">
                            <div class="icon box-lily__icon mdi mdi-crown"></div>
                            <p class="box-lily__title">6 месяцев - 9%</p></a></div>
                </div>
            </div>
        </section>

        <!-- News-->
{{--        <section class="section parallax-container section-md bg-gray-700 section-overlay-2 text-center text-lg-left" data-parallax-img="/images/home-parallax-2.jpg">--}}
{{--            <div class="parallax-content">--}}
{{--                <div class="container">--}}
{{--                    <div class="row row-30 flex-lg-row-reverse justify-content-center align-items-center">--}}
{{--                        <div class="col-sm-10 col-lg-5">--}}
{{--                            <div class="box-inset-2">--}}
{{--                                <h6 class="wow fadeInRightSmall">В ЦЕНТРЕ ВНИМАНИЯ</h6>--}}
{{--                                <h2 class="wow fadeInRightSmall" data-wow-delay=".1s">Последние <strong>новости</strong>--}}
{{--                                    по теме</h2>--}}
{{--                                <p class="wow fadeInRightSmall" data-wow-delay=".2s">--}}
{{--                                    Читайте и делитель актуальными новостями!--}}
{{--                                </p>--}}
{{--                                <a class="button button-primary wow fadeIn" data-wow-delay=".3s" href="{{ route('blog')}}">Читать все</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-7">--}}
{{--                            <div class="post-minimal-group">--}}
{{--                            @php--}}
{{--                                $articles = \Backpack\NewsCRUD\app\Models\Article::orderBy('id', 'DESC')->limit(3)->get();--}}
{{--                            @endphp--}}
{{--                            @foreach($articles as $article)--}}
{{--                            <!-- 1-->--}}
{{--                                <!-- Owl Carousel-->--}}
{{--                                <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="4012">--}}
{{--                                    <article class="post-minimal">--}}
{{--                                        <time class="post-minimal__time" datetime="2018">{{ $article->created_at->diffForHumans() }}</time>--}}
{{--                                        <p>{!! substr($article->title, 0, 150) !!}</p>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </div>
@endsection
