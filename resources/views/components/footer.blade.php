<!-- Footer -->
<footer class="footer">
    <!-- верхняя тёмная часть
     4 колонки, у каждой есть нейм и контент -->
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">
                        <img src="/img/logo2.png" alt="" class="footer__logo">
                    </h2>
                    <div class="col__content">
                        <p>FTF is a huge team, and each member has at least 12 years of experience in various positions in the
                            investment banking segments.

                        </p>
                        <button class="btn footer__btn" data-toggle="modal" data-target="#myModal">PROFIT CALCULATOR</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">Navigation</h2>
                    <nav class="col__content">
                        <div class="nav__wrap">
                            <ul class="nav">
                                <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                                <li class="nav__item"><a href="{{ route('about') }}" class="nav__link">About Us</a></li>
                                <li class="nav__item"><a href="{{ route('reviews') }}" class="nav__link">Reviews of our company</a></li>
                                <li class="nav__item"><a href="#bigSection" class="nav__link">Strategy</a></li>
                                <li class="nav__item"><a href="{{ route('rules') }}" class="nav__link">Customer Agreement</a></li>
                            </ul>
                            <ul class="nav">
                                <li class="nav__item"><a href="#bigSection" class="nav__link">Our documents</a></li>
                                <li class="nav__item"><a href="{{ route('blog') }}" class="nav__link">News</a></li> <br>
                                <li class="nav__item"><a href="{{ route('faq') }}" class="nav__link">F.A.Q.</a></li>
                                <li class="nav__item"><a href="{{ route('faq') }}" class="nav__link">Contacts</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">Facebook</h2>
                    <div class="col__content">
                        <!-- виджет -->
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v5.0"></script>

                        <div class="fb-page" data-href="https://www.facebook.com/FTFai" data-tabs="timeline" data-height="250"
                             data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                             data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/FTFai" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/FTFai">FTF - Future Technologies Fund</a></blockquote>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-5">
                    <h2 class="col__name">Contacts</h2>
                    <div class="col__content">
                        <a href="mailto:info@ftf.ai" class="mail"><i class="far fa-envelope"></i>info@ftf.ai</a>
                        <p class="schedule">Mon - Fri : 10:00 - 20:00 GMT
                        </p>
                        <p class="schedule">Sat - Sun : Weekend</p>
                    </div>
                    <div class="col__content-b">
                        <a target="_blank" href="https://www.facebook.com/FTFai/"><i class="fab fa-facebook"></i></a>
                        <a target="_blank" href="https://t.me/ftf_ai"><i class="fab fa-telegram-plane"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCYuzxaAGTWlNA3wqFeLiJzQ"><i
                                class="fab fa-youtube"></i></a>
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
                    <p>©️ 2019 <b>FUTURE TECHNOLOGIES FUND</b>. </p>
                    <p>Copyright PAGLETTO GROUP LP. All rights reserved. PAGLETTO GROUP LP is registered in Scotland
                        with company number SL33917 and its registered office at Suite 1, 4 Queen street, Edinburgh, EH2 1JE,
                        Scotland, UK.</p>
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
