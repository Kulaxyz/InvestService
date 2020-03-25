@extends('layouts.visit')
@section('meta')
    <title>Контакты</title>
@endsection
@section('content')
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom bg-image context-dark section-overlay-1" style="background-image: url(images/breadcrumbs-image-7.jpg);">
    <div class="container">
        <div class="breadcrumbs-custom__main">
            <h1 class="breadcrumbs-custom-title">Контакты</h1>
        </div>
        <ul class="breadcrumbs-custom__path">
            <li><a href="{{ route('index') }}">Главная</a></li>
            <li class="active">Контакты</li>
        </ul>
    </div>
</section>

<!-- Mailform-->
<section class="section section-lg">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between row-2-columns-bordered row-50">
            <div class="col-md-10 col-lg-4">
                <h3>Связаться с нами</h3>
                <ul class="list-creative">
                    <li>
                        <dl class="list-terms-medium">
                            <dt>Номера телефонов</dt>
                            <dd>
                                <ul class="list-xs">
                                    <li><a href="tel:#">+1-800-700-6200</a></li>
                                    <li><a href="tel:#">+1-800-955-4567</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="list-terms-medium">
                            <dt>E-mail</dt>
                            <dd>
                                <ul class="list-xs">
                                    <li><a href="mailto:#">mail@demolink.org</a></li>
                                    <li><a href="mailto:#">info@demolink.org</a></li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
                <div class="col-lg-10 col-xl-8">
                    <h3>Поддержка</h3>
                    <div class="row row-30 flex-md-row-reverse">
                        <div class="col-md-6"><img src="images/typography-1-770x485.jpg" alt="" width="770" height="485">
                        </div>
                        <div class="col-md-6">
                            <p>
                                Наши эксперты всегда готовы вам помочь. В случае возникновения каких-либо проблем
                                вы можете обратиться в отдел поддержки.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
