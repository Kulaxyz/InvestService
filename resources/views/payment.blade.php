@extends('layouts.app')

@section('content')
    <div class="cabinet__wrap2">
        <!-- хлебные крошки -->
        <div class="cabinet__breadcrumbs">
            <p id="page__name">Создание Депозита</p>
            <ul class="breadcrumbs__list">
                <li class="list__item">
                    <a href="{{ route('wallet') }}">Кошелёк</a>
                </li>
                <li class="list__item">
                    <a href="#">Пополнить кошелёк</a>
                </li>
            </ul>
        </div>
        <main class="cabinet__content">
            <div class="payment">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <p> Выберите платёжную систему:</p>
                                <div class="card-table-wrap">
                                    <div class="card-table2">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="table-secondary ">Платёжная система</th>
                                                <th scope="col" class="table-secondary text-center">Комиссия</th>
                                                <th scope="col" class="table-secondary text-center">Время</th>
                                                <th scope="col" class="table-secondary text-center">Успешен</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="">
                                                    <img src="../img/bank.png" alt="">
                                                    Bank Card (3dSecure)</td>
                                                <td class="text-center">0%</td>
                                                <td class="text-center">Instant</td>
                                                <td class="text-center"><button data-toggle="modal" data-target="#depositModal1"
                                                                                class="select-btn">Select</button></td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <img class="btc-lit" src="../img/btc-lit.png" alt="">Bitcoin</td>
                                                <td class="text-center">0%</td>
                                                <td class="text-center">Instant</td>
                                                <td class="text-center"><button data-toggle="modal" data-target="#depositModal2"
                                                                                class="select-btn">Select</button></td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <img src="../img/eth.png" alt="">Ethereum</td>
                                                <td class="text-center">0%</td>
                                                <td class="text-center">Instant</td>
                                                <td class="text-center"><button data-toggle="modal" data-target="#depositModal2"
                                                                                class="select-btn">Select</button></td>
                                            </tr>
                                            <tr>
                                                <td class="">
                                                    <img src="../img/adv.png" alt="">Advanced cash </td>
                                                <td class="text-center">0%</td>
                                                <td class="text-center">Instant</td>
                                                <td class="text-center"><button data-toggle="modal" data-target="#depositModal2"
                                                                                class="select-btn">Select</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@stop
