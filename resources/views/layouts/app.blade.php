<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Личный Кабинет</title>
    <script src="https://kit.fontawesome.com/8ea838e65b.js"></script>
    <link rel="stylesheet" href="{{asset('/css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
</head>

<body>
<!-- шапка -->
<header class="cabinet__header">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-lg-2 col-2">
                <div class="logo">
                    <img src="/img/logo2.png" alt="">
                </div>
                <button id="sidebarCollapse" class="cabinet-menu__btn">
                    &#9776;
                </button>
            </div>
            <div class="col-lg-6 col-10 offset-lg-4 d-flex align-items-center justify-content-end">
                <!-- правая часть  -->
                <div class="right" style="display: contents">
                    <div class="user">
                        <img src="/img/user__logo.png" alt="" class="user__logo">
                        <p class="meating">
                            Привет,
                            <span id="user__name">
                  {{ auth()->user()->name }}!
                </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- под шапкой -->
<div class="cabinet__wrap">`
    <!-- боковая панель -->
    <nav id="sidebar">
        <div class="sidebar-header" style="height: 100px;">
            <h3 style="margin-top: 10px">Меню</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{ route('index') }}">Главная</a>
            </li>
            <li @if(request()->is('*depositList*') || request()->is('*wallet*'))class="active"@endif>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Депозиты</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{route('wallet')}}">Новый депозит</a>
                    </li>
                    <li>
                        <a href="{{route('depositList')}}">Список Депозитов</a>
                    </li>
                </ul>
            </li>
            <li @if(request()->is('*payment*')) class="active" @endif>
                <a href="{{ route('payment') }}">Пополнить счёт</a>
            </li>
            <li @if(request()->is('*withdrawal*')) class="active" @endif>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Вывод средств</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ route('withdrawal') }}">Вывести</a>
                    </li>
                    <li>
                        <a href="{{ route('withdrawalHistory') }}">История выплат</a>
                    </li>
                </ul>
            </li>
            <li @if(request()->is('*referrals*')) class="active" @endif>
                <a href="{{ route('referrals') }}">Реферальная программа</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="{{ route('logout') }}" class="download">Выйти</a>
            </li>
        </ul>
    </nav>
    <!-- контент -->
    @yield('content')
</div>
<!-- modal -->
@yield('modal')
<div class="modal modal-warning fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" viewBox="0 0 286.054 286.054" style="enable-background:new 0 0 286.054 286.054;"
                     xml:space="preserve">
            <g>
                <path style="fill:#E2574C;" d="M143.027,0C64.04,0,0,64.04,0,143.027c0,78.996,64.04,143.027,143.027,143.027
		c78.996,0,143.027-64.022,143.027-143.027C286.054,64.04,222.022,0,143.027,0z M143.027,259.236
		c-64.183,0-116.209-52.026-116.209-116.209S78.844,26.818,143.027,26.818s116.209,52.026,116.209,116.209
		S207.21,259.236,143.027,259.236z M143.036,62.726c-10.244,0-17.995,5.346-17.995,13.981v79.201c0,8.644,7.75,13.972,17.995,13.972
		c9.994,0,17.995-5.551,17.995-13.972V76.707C161.03,68.277,153.03,62.726,143.036,62.726z M143.036,187.723
		c-9.842,0-17.852,8.01-17.852,17.86c0,9.833,8.01,17.843,17.852,17.843s17.843-8.01,17.843-17.843
		C160.878,195.732,152.878,187.723,143.036,187.723z" />
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
          </svg>
                <h2>Что-то пошло не так…</h2>

                <div class="bordered">
                    У вас недостаточно средств на счету.
                </div>
                <button class="btn-danger btn">Список депозитов</button>
            </div>
            <div class="modal-footer  d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-success fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" viewBox="0 0 286.054 286.054" style="enable-background:new 0 0 286.054 286.054;"
                     xml:space="preserve">
            <g>
                <path style="fill:#3DB39E;"
                      d="M143.031,0C64.027,0,0.004,64.04,0.004,143.027c0,78.996,64.031,143.027,143.027,143.027
		c78.987,0,143.018-64.031,143.018-143.027C286.049,64.049,222.018,0,143.031,0z M143.031,259.236
		c-64.183,0-116.209-52.026-116.209-116.209S78.857,26.818,143.031,26.818s116.2,52.026,116.2,116.209
		S207.206,259.236,143.031,259.236z M199.241,82.187c-6.079-3.629-13.847-1.475-17.342,4.827l-47.959,86.147l-26.71-32.512
		c-4.836-5.569-11.263-8.456-17.333-4.827c-6.079,3.638-8.591,12.39-4.657,18.004l37.169,45.241c2.78,3.611,5.953,5.775,9.27,6.392
		l0.027,0.054l0.34,0.018c0.751,0.116,11.979,2.19,16.815-6.463l55.048-98.876C207.402,93.879,205.32,85.825,199.241,82.187z" />
            </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
          </svg>
                <h2>Успешно!</h2>
                <div class="bordered">
{{--                    <b>Congratulations!</b> A Deposit of 22$ has been successfully created.--}}
                </div>
            <p class="subtitle">Вы можете слежить за своими депозитами в разделе "Список депозитов"</p>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script src="/js/scripts.min.js"></script>
<script src="/js/cabinet.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

</body>
</html>
