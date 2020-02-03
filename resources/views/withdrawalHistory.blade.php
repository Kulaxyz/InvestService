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
            <div class="history">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p class="pretitle">Withdrawal History</p>
                            <div class="card">
                                <div class="card-table-wrap">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="  text-center">Sum</th>
                                            <th scope="col" class=" text-center">Date</th>
                                            <th scope="col" class=" text-center">Payment System</th>
                                            <th scope="col" class=" text-center">Details</th>
                                            <th scope="col" class=" text-center">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($withdrawals as $withdrawal)
                                            <tr>
                                                <td scope="col" class="table-secondary text-center">{{$withdrawal->amount}}$</td>
                                                <td scope="col" class="table-secondary text-center">{{$withdrawal->created_at->format('Y.m.d')}}</td>
                                                <td scope="col" class="table-secondary text-center">{{ $withdrawal->payment_method }}</td>
                                                <td scope="col" class="table-secondary text-center">{{ $withdrawal->payment_details }}</td>
                                                @if($withdrawal->status)
                                                    <td scope="col" class="table-secondary text-center"><span class="symb-success">{{trans('custom.success')}}</span></td>
                                                @else
                                                    <td scope="col" class="table-secondary text-center"><span class="symb-waiting">{{trans('custom.waiting')}}</span></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- футер -->
        <footer class="cabinet__footer">
            <p>Copyright © Future Technologies Company 2019</p>
        </footer>
    </div>
@stop
