@extends('layouts.visit')

@section('content')
    <!-- about -->
    <section class="about " id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="video__desc  wow fadeInLeft" data-wow-delay="0.5s">Компания FTC – команда,
                        у каждого члена которой за плечами не менее 12 лет работы на разных позициях
                        в сегменте инвестиционного бизнеса – от аудитора и аналитика отдела рисков до
                        финансового директора инвестиционного банка. Формируя динамичный инвестиционный портфель,
                        мы ежедневно применяем накопленный опыт в разных направлениях, и делаем упор на стартапы в сферах:
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="title mt-sm-5">КАК МЫ ЗАРАБАТЫВАЕМ?</h2>
                    <div class="block wow fadeInRight" data-wow-delay="0.5s">
                        <img src="/img/research.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">ИИ</h3>
                            <p class="block__desc   wow fadeInRight">Patented IT Software based on Arfitificial Intelligence serves
                                as a tool to
                                generate stable income for our investors. Our productis in demand in its niche, and is used by our
                                analysts and leading corporations, such as Huawei, Apple and Google <a href="#startaps"
                                                                                                       id="more">More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInRight" data-wow-delay="1s">
                        <img src="/img/laptop.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">Нефть</h3>
                            <p class="block__desc">Today, IT projects in this area are in the spotlight of investors around the
                                world. But these technologies interest us not only in themselves, we consider the prospects of their
                                introduction in e-commerce and in the development of marketplaces.</p>
                        </div>
                    </div>
                    <div class="block wow fadeInRight" data-wow-delay="1.5s">
                        <img src="/img/layers.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">Ценные металлы</h3>
                            <p class="block__desc">
                                With our connections, we can invest in the most Promising startups. We have a good portfolio of
                                companies that are already profitable and generate income for our investors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features	 -->
    <section class="features">
        <img src="/img/features__img.png" alt="" class=" purple features__img">
        <div class="container">
            <h2 class="title">Преимущества Работы С Нами:
            </h2>
            <p class="subtitle">Почему мы?</p>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="block wow fadeInUp " data-wow-delay="0.5s">
                        <img src="/img/features_1.svg" alt="">
                        <div>
                            <h3 class="block__title">Стабильный доход без ристок</h3>
                            <p class="block__desc">
                                Возможность получения стабильной доходности, превышающей процентную ставку по банковским депозитам
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_2.svg" alt="">
                        <div>
                            <h3 class="block__title">Быстрый вывод средств</h3>
                            <p class="block__desc">
                                Мы знаем как важно иметь доступ к своим личным средствам,
                                поэтому автоматизировали процесс вывода дивидендов до 24-х часов
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-2	">
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_3.svg" alt="">
                        <div>
                            <h3 class="block__title">Стратегии заработка</h3>
                            <p class="block__desc">
                                Эффективность инвестиционных стратегий и защита ваших денежных средств
                                подтверждается многолетним опытом работы профессиональной команды инвесторов
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_4.svg" alt="">
                        <div>
                            <h3 class="block__title">Минимальная инвестиция - 10$</h3>
                            <p class="block__desc">
                                Вы сами определяете свои инвестиционные цели. Начните с небольшой суммы, основные депозитные предложения доступны от 10$.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features__buttons">
                <button class="features__buttons-reg mb-3" onclick="location.href='{{route('register')}}'">Регистрация</button>
                <button class="features__buttons-calc" onclick="location.href='{{route('register')}}'">Калькулятор прибыли</button>
            </div>
        </div>
    </section>

    <section class="bigSection" id="bigSection" style="margin-top: 20px !important;">
        <!-- Информация о нас -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info-block">
                        <div class="info__top" style='background: linear-gradient(59.8deg,#008d31 0,#01380d 72.74%);'>КАК МЫ ЗАРАБАТЫВАЕМ?</div>
                        <div class="info__content">
                            <p>В основе нашей бизнес-модели лежит принцип 3-х уровневой диверсификации – ресурсов, инвестиций и рисков
                            </p>
                            <p>
                                Что это значит? Если мы инвестируем в один из нишевых проектов, то обязательно подбираем
                                смежные проекты в этой же нише – менее рискованные и более короткие с точки зрения получения прибыли.
                            </p>
                            <p>
                                При таком подходе к инвестированию мы параллельно наращиваем прибыль и дивиденды
                                с уже существующих вложений в другие проекты, чтобы иметь финансовый баланс и гарантировать
                                выплаты дивидендов нашим инвесторам в сроки.
                            </p>
                            <p>
                                И этот финансовый баланс мы поддерживаем и гарантируем как средствами,
                                привлеченными с нашей онлайн-платформы, так и из других источников,
                                в том числе – собственными базовыми инвестициями.
                            </p>
                            <p>
                                Помимо работы с рисками, бизнес-модель FTC – это четкая система прогнозированного
                                заработка и бонусов. Как только вы зарегистрируетесь на нашем сайте,
                                вы получаете от 5% в месяц от суммы вашей инвестиции, а также в качетсве бонуса от +1% до +2%
                                к ставке согласно избранному вами тарифному плану. Все расчеты и выплаты происходят автоматически и абсолютно прозрачно.
                            </p>
                            <p>
                                Такая бизнес-модель позволяет нашей компании не только работать стабильно
                                и быть финансово устойчивой в очень изменчивых реалиях рынка, но и также дает
                                нам возможность очень быстро принимать решения, быть мобильной и эффективной командой,
                                ведь деньги не только не спят, но и не медлят.
                            </p>
                            <p>
                                Более детально ознакомиться с нашими бизнес-пакетами, открытыми в рамках онлайн-платформы, вы можете в специальном разделе.
                            </p>
                        </div>
                        <button class="info__btn" onclick="location.href='{{ route('login') }}'"><i class=" far fa-user"></i>
                            Личный кабинет</button>
                    </div>
                </div>
                {{--            <div class="col-lg-3" id="documents">--}}
                {{--                <div class="block wow zoomIn mb-5" data-wow-delay="0.5s" data-toggle="modal" data-target="#sertificate1">--}}
                {{--                    <button data-toggle="modal" data-target="#sertificate1"><i class="fas fa-search"--}}
                {{--                                                                               aria-hidden="true"></i></button>--}}
                {{--                    <div class="white">--}}
                {{--                        <p class="text-g">Document</p>--}}
                {{--                        <p class="subtitle">Certificate Of Registration Of A Limited Partnership</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="gradient"></div>--}}
                {{--                    <img src="/img/sertificate1.jpg" alt="">--}}
                {{--                </div>--}}
                {{--                <div class="block wow zoomIn" data-wow-delay="0.5s" data-toggle="modal" data-target="#sertificate2">--}}
                {{--                    <button data-toggle="modal" data-target="#sertificate2"><i class="fas fa-search"--}}
                {{--                                                                               aria-hidden="true"></i></button>--}}
                {{--                    <div class="white">--}}
                {{--                        <p class="text-g">Document</p>--}}
                {{--                        <p class="subtitle"> Official Documents</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="gradient"></div>--}}
                {{--                    <img src="/img/sertificate2.jpg" alt="">--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    </section>
    <div class="modal fade" id="sertificate1" tabindex="-1" role="dialog" aria-labelledby="sertificate1Label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" data-toggle="modal" data-target="#sertificate1">Sertificate
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" role="document">
                    <div class="modal-content modal-content-video">
                        <img src="/img/sertificate1.jpg" alt="" class="sertificates__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="modal fade" id="sertificate2" tabindex="-1" role="dialog" aria-labelledby="sertificate2Label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" data-toggle="modal" data-target="#sertificate2">Sertificate
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" role="document">
                    <div class="modal-content modal-content-video">
                        <img src="/img/sertificate2.jpg" alt="" class="sertificates__img">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
