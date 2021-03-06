@extends(backpack_view('blank'))

@section('content')
    <div class="row">
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center"><i class="fa fa-user bg-info p-3 font-2xl mr-3"></i>
                    <div>
                        <div class="text-value-sm text-info">{{ $registered }}</div>
                        <div class="text-muted text-uppercase font-weight-bold small">{{ trans('custom.registered') }}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ backpack_url('user') }}"><span class="small font-weight-bold">View More</span><i class="fa fa-angle-right"></i></a></div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="fa fa-dollar bg-primary p-3 font-2xl mr-3"></i>
                <div>
                    <div class="text-value-sm text-primary">{{ $invested }}$</div>
                    <div class="text-muted text-uppercase font-weight-bold small">{{trans('custom.invested')}}</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ backpack_url('payment') }}"><span class="small font-weight-bold">View More</span><i class="fa fa-angle-right"></i></a></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body p-3 d-flex align-items-center"><i class="fa fa-bell bg-danger p-3 font-2xl mr-3"></i>
                <div>
                    <div class="text-value-sm text-danger">{{ $withdrawn }}$</div>
                    <div class="text-muted text-uppercase font-weight-bold small">{{trans('custom.withdrawn')}}</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="{{ backpack_url('withdrawal') }}"><span class="small font-weight-bold">View More</span><i class="fa fa-angle-right"></i></a></div>
        </div>
    </div>
        <div class="col-6 col-lg-3">
            <div class="card">
                <div class="card-body p-3 d-flex align-items-center"><i class="fa fa-dollar bg-warning p-3 font-2xl mr-3"></i>
                    <div>
                        <div class="text-value-sm text-warning">{{ $deposited }}$</div>
                        <div class="text-muted text-uppercase font-weight-bold small">{{trans('custom.deposited')}}</div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2"><a class="btn-block text-muted d-flex justify-content-between align-items-center" href="#"><span class="small font-weight-bold">View More</span><i class="fa fa-angle-right"></i></a></div>
            </div>
        </div>
    </div>
    <h1>Общая статистика (кол-во)</h1>
    {!! $chart->container() !!}
    <h1>Общая статистика (в USD)</h1>
    {!! $moneyChart->container() !!}
    <div class="row">
        <div class="row">
            <h2 class="mr-5 ml-4">Статистика пакетов (в USD)</h2>
            <h2 class="ml-5">Статистика пакетов (кол-во)</h2>
        </div>
        {!! $typesAmountChart->container() !!}
        {!! $typesChart->container() !!}
    </div>
@endsection
@section('after_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}
    {!! $moneyChart->script() !!}
    {!! $typesChart->script() !!}
    {!! $typesAmountChart->script() !!}
@endsection
