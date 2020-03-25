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
{{--                        <div>--}}
{{--                            <div class="slick-slide-caption">--}}
{{--                                <h6>A perfect payment tool</h6>--}}
{{--                                <h1>Pay everywhere</h1>--}}
{{--                                <h3 class="decoration-heading-1">For Goods and Services</h3>--}}
{{--                                <p>Like any other modern currency, Bitcoin is available everywhere at any time for transactions and payments.</p>--}}
{{--                                <div class="slick-slide-caption__footer"><a class="button button-primary" href="about-us.html">Read More</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="slick-slider carousel-child slick-animation-scale" id="slider-child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-items="1" data-slide-to-scroll="1" data-autoplay="true">
                    <div class="item">
                        <div class="slick-img" style="background-image: url(/images/slider-slide-1.jpg);"></div>
                    </div>
{{--                    <div class="item">--}}
{{--                        <div class="slick-img" style="background-image: url(/images/slider-slide-2.jpg);"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <div class="slick-img" style="background-image: url(/images/slider-slide-3.jpg);"></div>--}}
{{--                    </div>--}}
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

        <!-- How it works-->
        <section class="section section-lg bg-gray-100 text-center">
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
            </div>
        </section>

        <!-- CTA-->
        <section class="section parallax-container section-md bg-gray-700 text-center section-overlay-1 text-lg-left" data-parallax-img="/images/home-parallax-1.jpg">
            <div class="parallax-content">
                <div class="container">
                    <div class="row row-30 align-items-center">
                        <div class="col-lg-9 wow fadeInLeftSmall">
                            <h2>Создайте кошелёк с <strong>полным спектром</strong>, возможностей!</h2>
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
        <section class="section parallax-container section-md bg-gray-700 section-overlay-2 text-center text-lg-left" data-parallax-img="/images/home-parallax-2.jpg">
            <div class="parallax-content">
                <div class="container">
                    <div class="row row-30 flex-lg-row-reverse justify-content-center align-items-center">
                        <div class="col-sm-10 col-lg-5">
                            <div class="box-inset-2">
                                <h6 class="wow fadeInRightSmall">В ЦЕНТРЕ ВНИМАНИЯ</h6>
                                <h2 class="wow fadeInRightSmall" data-wow-delay=".1s">Последние <strong>новости</strong>
                                    по теме</h2>
                                <p class="wow fadeInRightSmall" data-wow-delay=".2s">
                                    Читайте и делитель актуальными новостями!
                                </p>
                                <a class="button button-primary wow fadeIn" data-wow-delay=".3s" href="{{ route('blog')}}">Читать все</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-minimal-group">
                            @php
                                $articles = \Backpack\NewsCRUD\app\Models\Article::orderBy('id', 'DESC')->limit(3)->get();
                            @endphp
                            @foreach($articles as $article)
                            <!-- 1-->
                                <!-- Owl Carousel-->
                                <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-loop="true" data-margin="10" data-autoplay="true" data-mouse-drag="false" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay-timeout="4012">
                                    <article class="post-minimal">
                                        <time class="post-minimal__time" datetime="2018">{{ $article->created_at->diffForHumans() }}</time>
                                        <p>{!! substr($article->title, 0, 150) !!}</p>
                                    </article>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
