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

    <!-- Features-->
    <section class="section bg-white text-center">
        <div class="container">
            <h6>Наши преимущества</h6>
            <h2><span class="d-inline-block" style="max-width: 520px;">Какие плюсы работы с нами?</span></h2>
            <div class="row row-bordered-1">
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-lock"></span>
                        <h4 class="box-minimal__title">Безопасно &amp; Надёжно</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Будьте уверены в безопасновти вашего аккаунта и сохранности средств.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-cloud-upload"></span>
                        <h4 class="box-minimal__title">Быстрый вывод</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Средства быстро поступят на ваш счёт.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-umbrella2"></span>
                        <h4 class="box-minimal__title">Помощь специалистов</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Мы предоставляем круглосуточную поддержку наших клиентов.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-tablet2"></span>
                        <h4 class="box-minimal__title">Мобильное приложение</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Кошелёк в виде приложения (в разработке).</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-credit-card"></span>
                        <h4 class="box-minimal__title">Персональный кошелёк</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Лёгкий в использовании кошелёк для инвестиций.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-sync"></span>
                        <h4 class="box-minimal__title">Возможность пополнения</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Вы можете добавить средства к размеру депозита.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
