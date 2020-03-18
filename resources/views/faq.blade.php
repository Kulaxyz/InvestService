@extends('layouts.visit')

@section('content')
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="title">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
            <p class="subtitle">F.A.Q.</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        Что нужно, чтобы начать работу c {{ env('APP_NAME') }}?
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <h6 class="cit">ЧТО НУЖНО, ЧТОБЫ НАЧАТЬ РАБОТУ C {{ config('app.name') }}?</h6>
                                    <p class="desc">
                                        Для начала сотрудничества с {{ config('app.name') }} нужно выполнить следующие действия:
                                    <ol>
                                        <li>Пройти регистрацию на официальном ресурсе – эта несложная процедура не займет много времени;
                                        </li>
                                        <li>Перейти в Личный Кабинет;</li>
                                        <li>Найти раздел для пополнения депозита;</li>
                                        <li>Внести свой стартовый депозит.</li>
                                    </ol>
                                    После этого вся инвестиционная деятельность будет осуществляться нашей компанией, в то время, как
                                    вы сможете получать свой доход в ежедневном режиме.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Могу ли я не заработать, инвестируя с {{ config('app.name') }}?
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Созданный нами проект нельзя считать некой беспроигрышной
                                    лотереей – в инвестиционном бизнесе риски присутствуют всегда.
                                    Однако успешность любого бизнеса, в том числе и нашего, зависит от того,
                                    насколько оправданными являются эти риски, и основная задача менеджмента
                                    сводится к тому, чтобы свести риски к минимуму.
                                    Все ответы на вопросы о том, как именно мы работаем с рисками, как зарабатываем
                                    и гарантируем прибыль нашим инвесторам, вы найдете в <a href="{{ route('about') }}">
                                        отдельном разделе нашего сайта.</a>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        КАКАЯ МИНИМАЛЬНАЯ И МАКСИМАЛЬНАЯ СУММА ДЕПОЗИТА?
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Минимальная ставка - 5$</p>
                                    <p>Минимальная ставка - 5$</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4 mb-4">
                    <div class="contacts">
                        <h3 class="contacts__title">Контакты</h3>
                        <p class="contacts__desc">Мы убеждены, что коммуникация является одним из ключевых инструментов успеха в
                            нашем деле</p>
                        <div class="contacts__info">
                            <p><i class="fas fa-map-marker" aria-hidden="true"></i><b>Россия, 123100, Москва, 1-ый Меркурий Сити
                                    Тауэр, 1-й Красногвардейский пр-д, 15</b></p>
                            <div>
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:{{config('app.mail')}}"><b>{{ config('app.mail') }}</b></a>
                            </div>
                            <p>
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <b>ПН - ПТ: 10:00 - 20:00 по МСК <br>
                                    СБ - ВС: свободный график</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
