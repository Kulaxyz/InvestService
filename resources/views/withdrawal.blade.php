@extends('layouts.app')

@section('content')
    <div class="cabinet__wrap2">
        <!-- хлебные крошки -->
        <div class="cabinet__breadcrumbs">
            <p id="page__name">Вывод средств</p>
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
            <div class="request">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p class="pretitle">Пожалуйста, выберите, куда вы хотите вывести средства:</p>
                            <div class="request__wrap">
                                <div class="request__card">
                                    <div class="img-wrap"><img src="../img/master.png" alt=""></div>
                                    <button class="request__card-btn" onclick="$('#modalWithdrawCard').modal();
                                        $('#withdrawal_type').val(1)">{{trans('custom.order_withdrawal')}}</button>
                                </div>
                                <div class="request__card">
                                    <div class="img-wrap"><img style="width: 125px;" src="../img/yandex_dengi.png" alt=""></div>
                                    <button class="request__card-btn" onclick="$('#modalWithdrawCard').modal();
                                        $('#withdrawal_type').val(2)">{{trans('custom.order_withdrawal')}}</button>
                                </div>
                                <div class="request__card">
                                    <div class="img-wrap"  style="margin-bottom: 0 !important;"><img style="width: 115px" src="../img/Qiwi_logo.png" alt=""></div>
                                    <button style="margin-bottom: -10px" class="request__card-btn" onclick="$('#modalWithdrawCard').modal();
                                        $('#withdrawal_type').val(3)">{{trans('custom.order_withdrawal')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- футер -->
{{--        <footer class="cabinet__footer">--}}
{{--            <p>Copyright © Future Technologies Company 2019</p>--}}
{{--        </footer>--}}
    </div>
@stop
@section('modal')
    <div class="modal modal-withdrawal fade" id="modalWithdrawCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>{{ trans('custom.card_number') }}</h2>
                    <div class="card">
                        <div class="card-body">
                            <form id="withdrawal_form" class="card-input" method="post">
                                @csrf
                               <div class="input-wrap" style="max-width: 100% !important; margin-bottom: 20px;">
                                    <input type="number" id="input" name="amount" maxlength="5" placeholder="{{trans('custom.amount')}}: 0.00">
                                    <div class="dollar">$</div>
                                </div>
                                <div class="input-wrap" style="max-width: 100% !important; margin-bottom: 20px;">
                                    <input type="number" class="any-input" name="card_number" minlength="16" maxlength="16" placeholder="{{trans('custom.number')}}: 0000 0000 0000 0000">
                                </div>
                                <input type="hidden" name="type" id="withdrawal_type" value ="1">
                                <button class="button-create">{{ trans('custom.order_withdrawal') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('custom.close') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection
