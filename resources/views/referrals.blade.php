@extends('layouts.app')

@section('content')
    <div class="cabinet__wrap2">
        <!-- хлебные крошки -->
        <div class="cabinet__breadcrumbs">
            <p id="page__name">ПАРТНЕРСКАЯ ПРОГРАММА КОМПАНИИ FTC</p>
            <ul class="breadcrumbs__list">
                <li class="list__item">
                    <a href="{{ route('wallet') }}"> Кошелёк </a>
                </li>
                <li class="list__item">
                    <a href="{{ route('wallet') }}">Создать депозит</a>
                </li>
            </ul>
        </div>
        <main class="cabinet__content">
            <div class="affiliate">
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="affiliate-card">
                                <div class="affiliate-card-header">
                                    ПАРТНЕРСКАЯ ПРОГРАММА
                                </div>
                                <div class="affiliate-card-body">
                                    <p class="mb-3">Каждый зарегистрированный участник компании «FTC» может воспользоваться своей реферальной ссылкой для приглашения партнеров и получать вознаграждения от первоначального депозита Вашего реферала.
                                    </p>
                                    <p>Партнёрская прибыль: <b>5% от первого депозита пришлашённого</b></p>
                                    <p><b>Например:</b> приглашенный Вами человек вложил 2000$, Вы автоматически получаете на основной баланс партнерское вознаграждение 100$
                                    </p>
                                    <p><b>Соблюдайте правила партнерской программы.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="affiliate-card">
                                <div class="affiliate-card-header affiliate-card-header-green">
                                    Партнерская ссылка
                                </div>
                                <div class="affiliate-card-body">
                                    <p class=" affiliate-card-link-text">Ваша ссылка</p>
                                    <div class="affiliate-card-link-wrap">
                                        <a class=" affiliate-card-link" href="#">
                                            {{ route('index') . '/?ref=' . auth()->user()->ref_link }}
                                        </a>
                                    </div>
                                    <p class=" affiliate-card-link-text">Ваш доход</p>
                                    <p class=" affiliate-card-money-text">{{auth()->user()->ref_bonus}} $.</p>
                                    <div class="affiliate-card-wrap">
                                        <div class="affiliate-card-wrap-item">
                                            <p class=" affiliate-card-link-text">Всего приглашено:</p>
                                            <p class=" affiliate-card-money-text">{{$affs}}</p>
                                        </div>
                                        <div class="affiliate-card-wrap-item">
                                            <p class=" affiliate-card-link-text">Активных</p>
                                            <p class=" affiliate-card-money-text">{{$affs}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="card">
                                <p>
                                    Список приглашенных
                                </p>
                                <div class="card-table-wrap">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="  text-center">Логин</th>
                                            <th scope="col" class=" text-center">Инвестировал</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($refs as $ref)
                                            <tr>
                                                <td scope="col" class="table-secondary text-center">{{ $ref->name }}</td>
                                                <td scope="col" class="table-secondary text-center">{{$ref->deposited}}$</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
{{--                                <div class="pagination">--}}
{{--                                    <ul class="pagination__list">--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">1</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">4</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">5</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">6</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">7</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">8</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">...</a></li>--}}
{{--                                        <li class="pagination__item"><a href="#" class="pagination__link">299</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@stop
