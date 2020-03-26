<!-- Footer -->
<footer class="footer">
    <!-- верхняя тёмная часть
     4 колонки, у каждой есть нейм и контент -->
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">
                        <img style="max-height: 70px" src="/images/logo.jpg" alt="" class="footer__logo">
                    </h2>
                    <div class="col__content">
                        <p>Формируя динамичный инвестиционный портфель, мы ежедневно применяем накопленный опыт в разных направлениях, и делаем упор на стартапы в разных сферах.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">Навигация</h2>
                    <nav class="col__content">
                        <div class="nav__wrap">
                            <ul class="nav">
                                <li class="nav__item"><a href="{{ route('index') }}" class="nav__link">Главная</a></li>
                                <li class="nav__item"><a href="{{ route('about') }}" class="nav__link">О Компании</a></li>
                                <li class="nav__item"><a href="{{ route('rules') }}" class="nav__link">Правила Сервиса</a></li>
                            </ul>
                            <ul class="nav">
                                <li class="nav__item"><a href="{{ route('blog') }}" class="nav__link">Новости</a></li> <br>
                                <li class="nav__item"><a href="{{ route('faq') }}" class="nav__link">F.A.Q.</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">Контакты</h2>
                    <div class="col__content">
                        <a href="mailto:{{config('app.mail')}}" class="mail"><i class="far fa-envelope"></i>{{ config('app.mail') }}</a>
                        <p class="schedule">ПН - ПТ: 10:00 - 20:00 по МСК
                        </p>
                        <p class="schedule">СБ - ВС: свободный график</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- bottom -->
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <p>©️ 2020 <b>{{ config('app.name') }}</b>. </p>
                    <p>Copyright (Company info).</p>
                </div>
                <!-- <div class="col-lg-5 col-12 ">
                    <p>Subscribe:
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-telegram-plane"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a></p>
                </div> -->
            </div>
        </div>
    </div>
</footer>
