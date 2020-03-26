@extends('layouts.visit')
@section('meta')
    <title>О Нас</title>
@endsection
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark section-overlay-1" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="container">
            <div class="breadcrumbs-custom__main">
                <h1 class="breadcrumbs-custom-title">О Нас</h1>
                <div class="breadcrumbs-custom__text">
                    <h4>Кто мы и что мы делаем?</h4>
                </div>
            </div>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('index') }}">Домой</a></li>
                <li class="active">О Нас</li>
            </ul>
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

@endsection
