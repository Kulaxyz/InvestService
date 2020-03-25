@extends('layouts.visit')
@section('meta')
    <title>F.A.Q.</title>
@endsection
@section('content')


    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark section-overlay-1" style="background-image: url(images/breadcrumbs-image-2.jpg);">
        <div class="container">
            <div class="breadcrumbs-custom__main">
                <h1 class="breadcrumbs-custom-title">F.A.Q.</h1>
                <div class="breadcrumbs-custom__text">
                    <h4>Инфрормация о работе сайта. (Часто задаваемые вопросы)</h4>
                </div>
            </div>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li class="active">F.A.Q.</li>
            </ul>
        </div>
    </section>

    <!-- Most Popular Guides-->
    <section class="section section-lg text-center">
        <div class="container">
            <div class="tabs-custom tabs-horizontal tabs-light" id="tabs-faq">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-faq-1" data-toggle="tab">Базовые вопросы</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-faq-2" data-toggle="tab">Использование кошелька</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-faq-3" data-toggle="tab">Технические вопросы</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-faq-1">
                        <!-- Bootstrap collapse-->
                        <div class="card-group-custom card-group-line" id="accordion-faq-1" role="tablist" aria-multiselectable="true">
                            <div class="row row-5 justify-content-center">
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading1" role="tab">
                                            <div class="card-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq-1"
                                                   href="#accordion-faq-1Collapse1"
                                                   aria-controls="accordion-faq-1Collapse1" aria-expanded="true">
                                                    Как мы зарабатываем
                                                    <div class="card-arrow"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="collapse show" id="accordion-faq-1Collapse1" role="tabpanel"
                                             aria-labelledby="accordion-faq-1Heading1">
                                            <div class="card-body">
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading2" role="tab">
                                            <div class="card-title">
                                                <a class="collapsed" role="button"
                                                   data-toggle="collapse" data-parent="#accordion-faq-1"
                                                   href="#accordion-faq-1Collapse2" aria-controls="accordion-faq-1Collapse2">
                                                    Как мы зарабатываем?
                                                    <div class="card-arrow"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-1Collapse2" role="tabpanel" aria-labelledby="accordion-faq-1Heading2">
                                            <div class="card-body">
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading3" role="tab">
                                            <div class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion-faq-1" href="#accordion-faq-1Collapse3"
                                                   aria-controls="accordion-faq-1Collapse3">
                                                    Как создать кошелёк?
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-1Collapse3" role="tabpanel" aria-labelledby="accordion-faq-1Heading3">
                                            <div class="card-body">
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                                <p>
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                    Тестовый ответ. Тестовый ответ.  Тестовый ответ. Тестовый ответ.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading4" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-1" href="#accordion-faq-1Collapse4" aria-controls="accordion-faq-1Collapse4">How to Set Up Bitcoin Cold Storage
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-1Collapse4" role="tabpanel" aria-labelledby="accordion-faq-1Heading4">
                                            <div class="card-body">
                                                <p>Nam sed pellentesque mi. Nam dignissim nibh nunc, et accumsan leo pretium non. Vestibulum id interdum nisi, porttitor sagittis metus. Quisque sit amet mauris in nisl bibendum faucibus.</p>
                                                <p>Aliquam accumsan auctor quam, dignissim pretium ipsum malesuada nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper, nulla a mollis ornare, dui eros malesuada orci, sed blandit tortor sem sed risus. Morbi eleifend, magna ac viverra accumsan, justo mi ultrices metus, gravida elementum erat sem sit amet velit.</p>
                                                <p>Sed ante massa, vehicula vel purus at, interdum convallis justo. Quisque eu purus eget erat commodo tempus.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading5" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-1" href="#accordion-faq-1Collapse5" aria-controls="accordion-faq-1Collapse5">Calculating Bitcoin Mining Profitability
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-1Collapse5" role="tabpanel" aria-labelledby="accordion-faq-1Heading5">
                                            <div class="card-body">
                                                <p>Quisque rutrum fringilla vulputate. Sed sagittis elit at turpis maximus mattis et eget ex. Sed nec ex eu tortor sodales commodo. Etiam non nibh ultrices, finibus justo ut, auctor sapien.</p>
                                                <p>Donec a metus id augue cursus euismod. Nulla arcu sapien, elementum id feugiat id, ornare in sapien. Nunc risus leo, condimentum non risus ut, pulvinar cursus sapien. Praesent vitae lobortis enim. Phasellus et felis magna.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-1Heading6" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-1" href="#accordion-faq-1Collapse6" aria-controls="accordion-faq-1Collapse6">How to Set Up a Bitcoin ASIC Miner
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-1Collapse6" role="tabpanel" aria-labelledby="accordion-faq-1Heading6">
                                            <div class="card-body">
                                                <p>Vestibulum varius malesuada dui nec vestibulum. Quisque egestas augue at euismod ultrices. In scelerisque rutrum quam in ultricies. Pellentesque sit amet magna vel felis.</p>
                                                <p>Pellentesque consectetur ultrices metus, vitae varius lorem consequat vel. Praesent viverra turpis sit amet orci rhoncus maximus. Morbi quis risus mauris. Praesent eget fringilla nisl. Cras sollicitudin et sapien quis egestas.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-faq-2">
                        <!-- Bootstrap collapse-->
                        <div class="card-group-custom card-group-line" id="accordion-faq-2" role="tablist" aria-multiselectable="true">
                            <div class="row row-5 justify-content-center">
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading1" role="tab">
                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse1" aria-controls="accordion-faq-2Collapse1" aria-expanded="true">Calculating Bitcoin Mining Profitability
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse show" id="accordion-faq-2Collapse1" role="tabpanel" aria-labelledby="accordion-faq-2Heading1">
                                            <div class="card-body">
                                                <p>Quisque rutrum fringilla vulputate. Sed sagittis elit at turpis maximus mattis et eget ex. Sed nec ex eu tortor sodales commodo. Etiam non nibh ultrices, finibus justo ut, auctor sapien.</p>
                                                <p>Donec a metus id augue cursus euismod. Nulla arcu sapien, elementum id feugiat id, ornare in sapien. Nunc risus leo, condimentum non risus ut, pulvinar cursus sapien. Praesent vitae lobortis enim. Phasellus et felis magna.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading2" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse2" aria-controls="accordion-faq-2Collapse2">How to Get Started with Bitcoin
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-2Collapse2" role="tabpanel" aria-labelledby="accordion-faq-2Heading2">
                                            <div class="card-body">
                                                <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut. Vestibulum ut dui placerat.</p>
                                                <p>Morbi convallis, leo non fringilla bibendum, orci dolor laoreet ante, vitae ultrices elit nisi sed metus. Donec sed hendrerit est. Fusce egestas ultrices mi, in pellentesque elit viverra luctus. Integer velit lectus, venenatis eu dolor in, pretium maximus orci.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading3" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse3" aria-controls="accordion-faq-2Collapse3">How to Choose the Best Bitcoin Wallet
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-2Collapse3" role="tabpanel" aria-labelledby="accordion-faq-2Heading3">
                                            <div class="card-body">
                                                <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut.</p>
                                                <p>Nam venenatis facilisis diam, sit amet vestibulum elit ultrices eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin molestie tempus placerat. Aliquam semper ultrices mi, nec maximus felis pretium id. Quisque in convallis urna, at egestas odio.</p>
                                                <p>liquam elit nunc, sodales a commodo nec, rutrum nec eros.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading4" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse4" aria-controls="accordion-faq-2Collapse4">How to Set Up Bitcoin Cold Storage
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-2Collapse4" role="tabpanel" aria-labelledby="accordion-faq-2Heading4">
                                            <div class="card-body">
                                                <p>Nam sed pellentesque mi. Nam dignissim nibh nunc, et accumsan leo pretium non. Vestibulum id interdum nisi, porttitor sagittis metus. Quisque sit amet mauris in nisl bibendum faucibus.</p>
                                                <p>Aliquam accumsan auctor quam, dignissim pretium ipsum malesuada nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper, nulla a mollis ornare, dui eros malesuada orci, sed blandit tortor sem sed risus. Morbi eleifend, magna ac viverra accumsan, justo mi ultrices metus, gravida elementum erat sem sit amet velit.</p>
                                                <p>Sed ante massa, vehicula vel purus at, interdum convallis justo. Quisque eu purus eget erat commodo tempus.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading5" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse5" aria-controls="accordion-faq-2Collapse5">How to Set Up a Bitcoin ASIC Miner
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-2Collapse5" role="tabpanel" aria-labelledby="accordion-faq-2Heading5">
                                            <div class="card-body">
                                                <p>Vestibulum varius malesuada dui nec vestibulum. Quisque egestas augue at euismod ultrices. In scelerisque rutrum quam in ultricies. Pellentesque sit amet magna vel felis.</p>
                                                <p>Pellentesque consectetur ultrices metus, vitae varius lorem consequat vel. Praesent viverra turpis sit amet orci rhoncus maximus. Morbi quis risus mauris. Praesent eget fringilla nisl. Cras sollicitudin et sapien quis egestas.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-2Heading6" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-2" href="#accordion-faq-2Collapse6" aria-controls="accordion-faq-2Collapse6">What is Bitcoin Mining?
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-2Collapse6" role="tabpanel" aria-labelledby="accordion-faq-2Heading6">
                                            <div class="card-body">
                                                <p>Maecenas laoreet quis turpis eget dapibus. Donec in ullamcorper neque, ornare rhoncus ante. Morbi nec pretium tortor, ac aliquet metus. Nunc eget efficitur sapien. Praesent sodales est.</p>
                                                <p>Praesent hendrerit ante a ligula sodales bibendum. Vestibulum tempus tempus urna vel efficitur. Sed at nisl erat. Aenean tincidunt aliquam facilisis. Ut molestie, eros id pellentesque pharetra, mi enim eleifend risus, eget imperdiet augue diam nec mi. Nam placerat euismod fringilla.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-faq-3">
                        <!-- Bootstrap collapse-->
                        <div class="card-group-custom card-group-line" id="accordion-faq-3" role="tablist" aria-multiselectable="true">
                            <div class="row row-5 justify-content-center">
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-3Heading1" role="tab">
                                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-faq-3" href="#accordion-faq-3Collapse1" aria-controls="accordion-faq-3Collapse1" aria-expanded="true">What is Bitcoin Mining?
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse show" id="accordion-faq-3Collapse1" role="tabpanel" aria-labelledby="accordion-faq-3Heading1">
                                            <div class="card-body">
                                                <p>Maecenas laoreet quis turpis eget dapibus. Donec in ullamcorper neque, ornare rhoncus ante. Morbi nec pretium tortor, ac aliquet metus. Nunc eget efficitur sapien. Praesent sodales est.</p>
                                                <p>Praesent hendrerit ante a ligula sodales bibendum. Vestibulum tempus tempus urna vel efficitur. Sed at nisl erat. Aenean tincidunt aliquam facilisis. Ut molestie, eros id pellentesque pharetra, mi enim eleifend risus, eget imperdiet augue diam nec mi. Nam placerat euismod fringilla.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-3Heading2" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-3" href="#accordion-faq-3Collapse2" aria-controls="accordion-faq-3Collapse2">How to Set Up a Bitcoin ASIC Miner
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-3Collapse2" role="tabpanel" aria-labelledby="accordion-faq-3Heading2">
                                            <div class="card-body">
                                                <p>Vestibulum varius malesuada dui nec vestibulum. Quisque egestas augue at euismod ultrices. In scelerisque rutrum quam in ultricies. Pellentesque sit amet magna vel felis.</p>
                                                <p>Pellentesque consectetur ultrices metus, vitae varius lorem consequat vel. Praesent viverra turpis sit amet orci rhoncus maximus. Morbi quis risus mauris. Praesent eget fringilla nisl. Cras sollicitudin et sapien quis egestas.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-3Heading3" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-3" href="#accordion-faq-3Collapse3" aria-controls="accordion-faq-3Collapse3">How to Choose the Best Bitcoin Wallet
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-3Collapse3" role="tabpanel" aria-labelledby="accordion-faq-3Heading3">
                                            <div class="card-body">
                                                <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut.</p>
                                                <p>Nam venenatis facilisis diam, sit amet vestibulum elit ultrices eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin molestie tempus placerat. Aliquam semper ultrices mi, nec maximus felis pretium id. Quisque in convallis urna, at egestas odio.</p>
                                                <p>liquam elit nunc, sodales a commodo nec, rutrum nec eros.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-10 col-lg-6">
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-3Heading4" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-3" href="#accordion-faq-3Collapse4" aria-controls="accordion-faq-3Collapse4">How to Get Started with Bitcoin
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-3Collapse4" role="tabpanel" aria-labelledby="accordion-faq-3Heading4">
                                            <div class="card-body">
                                                <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut. Vestibulum ut dui placerat.</p>
                                                <p>Morbi convallis, leo non fringilla bibendum, orci dolor laoreet ante, vitae ultrices elit nisi sed metus. Donec sed hendrerit est. Fusce egestas ultrices mi, in pellentesque elit viverra luctus. Integer velit lectus, venenatis eu dolor in, pretium maximus orci.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Bootstrap card-->
                                    <article class="card card-custom card-line">
                                        <div class="card-header" id="accordion-faq-3Heading5" role="tab">
                                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-faq-3" href="#accordion-faq-3Collapse5" aria-controls="accordion-faq-3Collapse5">How to Set Up Bitcoin Cold Storage
                                                    <div class="card-arrow"></div></a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="accordion-faq-3Collapse5" role="tabpanel" aria-labelledby="accordion-faq-3Heading5">
                                            <div class="card-body">
                                                <p>Nam sed pellentesque mi. Nam dignissim nibh nunc, et accumsan leo pretium non. Vestibulum id interdum nisi, porttitor sagittis metus. Quisque sit amet mauris in nisl bibendum faucibus.</p>
                                                <p>Aliquam accumsan auctor quam, dignissim pretium ipsum malesuada nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ullamcorper, nulla a mollis ornare, dui eros malesuada orci, sed blandit tortor sem sed risus. Morbi eleifend, magna ac viverra accumsan, justo mi ultrices metus, gravida elementum erat sem sit amet velit.</p>
                                                <p>Sed ante massa, vehicula vel purus at, interdum convallis justo. Quisque eu purus eget erat commodo tempus.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
