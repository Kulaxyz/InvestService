@extends('layouts.app')

@section('content')
    <div class="cabinet__wrap2">
        <!-- хлебные крошки -->
        <div class="cabinet__breadcrumbs">
            <p id="page__name">Deposit Creation</p>
            <ul class="breadcrumbs__list">
                <li class="list__item">
                    <a href="{{ route('wallet') }}"> Main </a>
                </li>
                <li class="list__item">
                    <a href="{{ route('wallet') }}">Personal Account</a>
                </li>
                <li class="list__item">
                    <a href="{{ route('wallet') }}">Deposit Creation</a>
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
                                    FTF AFFILIATE PROGRAM
                                </div>
                                <div class="affiliate-card-body">
                                    <p class="mb-3">Every user of the «FTF» Company can user their Affiliate Link to invite users and
                                        receive
                                        Comissions from their Deposits.</p>
                                    <p>Affiliate Comission: <b>5% from the deposit amount</b></p>
                                    <p><b>For example :</b> A person invested 20 000 $, You automatically receive 1000$ to your Balance.
                                    </p>
                                    <p><b>Please make sure to Follow the Affiliate Program Rules and dont register multiple accounts per
                                            user.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="affiliate-card">
                                <div class="affiliate-card-header affiliate-card-header-green">
                                    Affiliate Link
                                </div>
                                <div class="affiliate-card-body">
                                    <p class=" affiliate-card-link-text">Your Affiliate Link</p>
                                    <div class="affiliate-card-link-wrap">
                                        <a class=" affiliate-card-link" href="#">
                                            {{ route('index') . '/?ref=' . auth()->user()->ref_link }}
                                        </a>
                                    </div>
                                    <p class=" affiliate-card-link-text">Your Earnings</p>
                                    <p class=" affiliate-card-money-text">{{auth()->user()->ref_bonus}} $.</p>
                                    <div class="affiliate-card-wrap">
                                        <div class="affiliate-card-wrap-item">
                                            <p class=" affiliate-card-link-text">Total Affiliates:</p>
                                            <p class=" affiliate-card-money-text">{{$affs}}</p>
                                        </div>
                                        <div class="affiliate-card-wrap-item">
                                            <p class=" affiliate-card-link-text">Active Affiliates</p>
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
                                    Your Affiliate List
                                </p>
                                <div class="card-table-wrap">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="  text-center">Affiliate Logit</th>
                                            <th scope="col" class=" text-center">Deposited</th>
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
                                <div class="pagination">
                                    <ul class="pagination__list">
                                        <li class="pagination__item"><a href="#" class="pagination__link">1</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">4</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">5</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">6</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">7</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">8</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">...</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">299</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- футер -->
        <footer class="cabinet__footer">
            <p>Copyright © Future Technologies Company 2019 </p>
        </footer>
    </div>
@stop
