<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    @yield('meta')
    <title>Главная</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="//images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <!--    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,700%7CRubik:300,300i,500,700,900%7CMontserrat:400,700">-->
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <!--[if lt IE 10]>
    <div
        style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            src="//images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="preloader-item">
            <div class="diamond"></div>
            <div class="diamond"></div>
            <div class="diamond"></div>
        </div>
    </div>
</div>
    <div class="page">

        <!-- Page Header-->
        <header class="section page-header">

            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                     data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                     data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                     data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                     data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                     data-lg-stick-up-offset="40px" data-xl-stick-up-offset="40px" data-xxl-stick-up-offset="40px"
                     data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-outer"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="{{ route('index') }}"><img class="brand-logo-dark"
                                                                                                 src="/images/logo-default-125x45.png"
                                                                                                 alt="" width="125"
                                                                                                 height="45"
                                                                                                 srcset="/images/logo-default-250x90.png 2x"/><img
                                        class="brand-logo-light" src="/images/logo-inverse-125x45.png" alt="" width="125"
                                        height="45" srcset="/images/logo-inverse-250x90.png 2x"/></a>
                            </div>
                            <div class="rd-sidebar">
                                <a href="{{ route('wallet') }}">
                                <button class="rd-sidebar__button">
                                    <h6 style="color: #ffffff">ВОЙТИ</h6>
                                </button>
                                </a>
                                <ul class="rd-sidebar__list context-dark" id="rd-sidebar__list">
                                    <li class="rd-sidebar__list-item">
                                        <div class="rd-sidebar__list-item-inner">
                                            <div class="icon rd-sidebar__list-item-icon linearicons-cash-dollar"></div>
                                            <div class="rd-sidebar__list-item-main"><a
                                                    class="rd-sidebar__list-item-link" href="{{ route('wallet') }}">Личный кабинет</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="rd-sidebar__list-item">
                                        <div class="rd-sidebar__list-item-inner">
                                            <div class="icon rd-sidebar__list-item-icon linearicons-envelope"></div>
                                            <div class="rd-sidebar__list-item-main"><a
                                                    class="rd-sidebar__list-item-link" href="{{ route('contact') }}">Контакты</a></div>
                                        </div>
                                    </li>
                                    <li class="rd-sidebar__list-item">
                                        <div class="rd-sidebar__list-item-inner">
                                            <div class="icon rd-sidebar__list-item-icon linearicons-share2"></div>
                                            <div class="rd-sidebar__list-item-main">
                                                <ul class="list-inline list-inline-xs">
                                                    <li><a class="icon icon-md link-light mdi mdi-facebook"
                                                           href="#"></a></li>
                                                    <li><a class="icon icon-md link-light mdi mdi-twitter" href="#"></a>
                                                    </li>
                                                    <li><a class="icon icon-md link-light mdi mdi-youtube-play"
                                                           href="#"></a></li>
                                                    <li><a class="icon icon-md link-light mdi mdi-instagram"
                                                           href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-nav-outer">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item @if(\Route::current()->getName() == 'index') active @endif">
                                <a class="rd-nav-link" href="{{ route('index') }}">Главная</a>
                                </li>
                                <li class="rd-nav-item @if(\Route::current()->getName() == 'faq') active @endif">
                                    <a class="rd-nav-link" href="{{ route('faq') }}">F.A.Q.</a>
                                </li>
                                <li class="rd-nav-item @if(\Route::current()->getName() == 'about') active @endif">
                                    <a class="rd-nav-link" href="{{ route('about') }}">О Нас</a>
                                </li>
                                <li class="rd-nav-item @if(\Route::current()->getName() == 'blog') active @endif">
                                    <a class="rd-nav-link" href="{{ route('blog') }}">Новости</a>
                                </li>
                                <li class="rd-nav-item @if(\Route::current()->getName() == 'contact') active @endif">
                                    <a class="rd-nav-link" href="{{ route('contact') }}">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')
    </div>
<!-- Page Footer-->
<footer class="section footer-classic context-dark">
    <div class="container">
        <div class="footer-classic__main">
            <div class="row row-50">
                <div class="col-lg-6">
                    <div class="unit unit-spacing-sm flex-column flex-sm-row align-items-sm-center">
                        <div class="unit-left"><a class="brand" href="{{ route('index') }}"><img class="brand-logo-dark" src="/images/logo-default-125x45.png" alt="" width="125" height="45" srcset="/images/logo-default-250x90.png 2x"/><img class="brand-logo-light" src="/images/logo-inverse-125x45.png" alt="" width="125" height="45" srcset="/images/logo-inverse-250x90.png 2x"/></a>
                        </div>
                        <div class="unit-body">
                            <p><span style="max-width: 380px;">Формируя динамичный инвестиционный портфель, мы ежедневно
                                    применяем накопленный опыт в разных направлениях,
                                    и делаем упор в разных сферах.</span></p>
                        </div>
                    </div>
                    <div class="group group-lg group-middle">
                        <p class="large">Наше комьюнити</p>
                        <div class="group-item">
                            <ul class="list-inline list-inline-sm">
                                <li><a class="icon icon-lg link-default mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon icon-lg link-default mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon icon-lg link-default mdi mdi-youtube-play" href="#"></a></li>
                                <li><a class="icon icon-lg link-default mdi mdi-instagram" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-classic__aside">
            <div class="list-wrap">
                <ul class="list-nav">
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('about') }}">О нас</a></li>
                    <li><a href="{{ route('blog') }}">Новости</a></li>
                    <li>
                        <a href="{{ route('wallet') }}"><button>Личный кабинет</button></a>
                    </li>
                    <li><a href="{{ route('rules') }}">Правила</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </div>
            <div class="list-wrap">
                <ul class="list-bordered">
                    <li>
                        <!-- Rights-->
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>{{ config('app.name') }}</span><span>.&nbsp;</span></p>
                    </li>
                    <li><a href="mailto:{{ config('app.mail') }}">{{ config('app.mail') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

    <!-- Javascript1-->
    <script src="/js/core.min.js"></script>
    <script src="/js/script.js"></script>
@yield('scripts')
</body>
</html>
