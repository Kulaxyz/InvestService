<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
@if(backpack_user()->hasRole('admin'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i> Авторизация</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Пользователи</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-group"></i> <span>Роли</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Разрешения</span></a></li>
    </ul>
</li>
@endif
@if(backpack_user()->hasRole('admin') || backpack_user()->can('edit_articles'))
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-newspaper-o"></i>Новости</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon fa fa-newspaper-o"></i>Статьи</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon fa fa-list"></i>Категории</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon fa fa-tag"></i>Теги</a></li>
    </ul>
</li>
@endif

@if(backpack_user()->hasRole('admin'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('payment') }}'><i class='nav-icon fa fa-credit-card'></i><span>{{ trans_choice('custom.payment', 2) }}</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('withdrawal') }}'><i class='nav-icon fa fa-dollar'></i> <span>{{ trans_choice('custom.withdrawal', 2) }}
            @php
                $count = App\Withdrawal::where('status', 0)->count();
            @endphp
            @if($count)
                <span class="badge badge-pill badge-danger">{{ $count }}</span>
            @endif
        </span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('deposit') }}'><i class='nav-icon fa fa-rocket'></i><span>{{ trans_choice('custom.deposit', 2) }}
            @php
                $count = App\Deposit::where('status', 0)->count();
            @endphp
            @if($count)
                <span class="badge badge-pill badge-danger">{{ $count }}</span>
            @endif

        </span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('ticket') }}'><i class='nav-icon fa fa-retweet'></i><span>Заявки
            @php
                $count = App\Ticket::count();
            @endphp
            @if($count > 0)
                <span class="badge badge-pill badge-danger">{{ $count }}</span>
            @endif

        </span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cog'></i> <span>Настройки</span></a></li>
@endif
