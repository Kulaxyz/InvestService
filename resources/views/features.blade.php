@extends('layouts.visit')
@section('meta')
    <title>Особенности</title>
@endsection
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark section-overlay-1" style="background-image: url(/images/breadcrumbs-image-2.jpg);">
        <div class="container">
            <div class="breadcrumbs-custom__main">
                <h1 class="breadcrumbs-custom-title">Особенности</h1>
                <div class="breadcrumbs-custom__text">
                    <h4>Узнайте о лучшем инвестиционном сервисе.</h4>
                </div>
            </div>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li class="active">Особенности</li>
            </ul>
        </div>
    </section>

    <!-- FSection-->
    <section class="section section-md bg-white">
        <div class="container">
            <!-- Profile Light-->
            <article class="profile-light">
                <figure class="profile-light__figure"><img src="/images/features-1-193x201.jpg" alt="" width="193" height="201"/>
                </figure>
                <div class="profile-light__main">
                    <div class="profile-light__inner">
                        <h4 class="profile-light__title">Заголовок.</h4>
                        <div class="profile-light__text">
                            <p>Ваш путь к биткойнам начинается здесь. Вы готовы? Биткойн-кошелек,
                                идеально подходящий для начинающих, облегчает использование и хранение биткойнов.
                                Вход в систему не требуется.</p>
                        </div>
                    </div>
                </div>
            </article>

            <div class="col-12 col-lg-12 mt-5">
                <h3>Свяжитесь с нами!</h3>
                <!-- RD Mailform-->
                <form class="" method="post" action="{{ route('ticket') }}">
                    @csrf
                    <div class="row row-20">
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-name">Введите ваше имя</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                                <label class="form-label" for="contact-phone">Введите номер телефона</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Ваше сообщение</label>
                                <textarea class="form-input" id="contact-message" name="text" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email">Введите e-mail</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button class="button button-block button-primary" type="submit">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- Most Popular Guides-->
    <section class="section parallax-container section-md bg-gray-700 section-overlay-3 text-center" data-parallax-img="/images/features-parallax-1.jpg">
        <div class="parallax-content">
            <div class="container">
                <h6>Часто задаваемые вопросы</h6>
                <h2>База <strong>вопроов</strong> по нашему сервису</h2>
                <p>Ответы на все ваши вопросы (почти)?</p>
                <!-- Bootstrap collapse-->
                <div class="card-group-custom card-group-line" id="accordion-guide" role="tablist" aria-multiselectable="true">
                    <div class="row row-5 justify-content-center">
                        <div class="col-sm-10 col-lg-6">
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading1" role="tab">
                                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse1" aria-controls="accordion-guideCollapse1" aria-expanded="true"> C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse show" id="accordion-guideCollapse1" role="tabpanel" aria-labelledby="accordion-guideHeading1">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading2" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse2" aria-controls="accordion-guideCollapse2">C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion-guideCollapse2" role="tabpanel" aria-labelledby="accordion-guideHeading2">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading3" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse3" aria-controls="accordion-guideCollapse3">C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion-guideCollapse3" role="tabpanel" aria-labelledby="accordion-guideHeading3">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-10 col-lg-6">
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading4" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse4" aria-controls="accordion-guideCollapse4">C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion-guideCollapse4" role="tabpanel" aria-labelledby="accordion-guideHeading4">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading5" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse5" aria-controls="accordion-guideCollapse5">C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion-guideCollapse5" role="tabpanel" aria-labelledby="accordion-guideHeading5">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-line">
                                <div class="card-header" id="accordion-guideHeading6" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse6" aria-controls="accordion-guideCollapse6">C чего начать?
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="collapse" id="accordion-guideCollapse6" role="tabpanel" aria-labelledby="accordion-guideHeading6">
                                    <div class="card-body">
                                        <p>Сперва вы должны создать аккаунт. После этого вы сможете пополнить свой кошелёк и сделать первый депозит.</p><a class="link link-arrow" href="{{ route('register') }}">Регистрация</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div><a class="button button-primary" href="{{ route('faq') }}">Перейти ко всем ответам</a>
            </div>
        </div>
    </section>

    <!-- Features-->
    <section class="section bg-white text-center features">
        <div class="container">
            <h6>Направления</h6>
            <h2><span class="d-inline-block" style="max-width: 520px;">В какие направления мы инвестируем?</span></h2>
            <div class="row row-bordered-1">
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#stocks" class="box-minimal"><span class="icon box-minimal__icon linearicons-graph"></span>
                        <h4 class="box-minimal__title">Акции</h4>
                        <div class="box-minimal__divider"></div>
                        <p>На акциях крупных корпораций.</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#currency" class="box-minimal"><span class="icon box-minimal__icon linearicons-bag-euro"></span>
                        <h4 class="box-minimal__title">Валюта</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Мы зарабатываем на валютных парах.</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#oil" class="box-minimal"><span class="icon box-minimal__icon linearicons-oil-pressure"></span>
                        <h4 class="box-minimal__title">Нефть</h4>
                        <div class="box-minimal__divider"></div>
                        <p>На скачках курса нефти.</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#metal" class="box-minimal"><span class="icon box-minimal__icon linearicons-download"></span>
                        <h4 class="box-minimal__title">Металлы</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Cтабильные доходы от драгоценных металлов.</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#ship" class="box-minimal"><span class="icon box-minimal__icon linearicons-ship"></span>
                        <h4 class="box-minimal__title">Торговля</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Роботизированной торговле.</p>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <a href="{{ route('fields') }}#crypto" class="box-minimal"><span class="icon box-minimal__icon linearicons-inbox"></span>
                        <h4 class="box-minimal__title">Криптовалюты</h4>
                        <div class="box-minimal__divider"></div>
                        <p>Современные надёжные инвестиции.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>



@endsection
