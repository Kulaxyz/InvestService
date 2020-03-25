@extends('layouts.visit')
@section('meta')
    <meta name="title" content="{{ $article->meta_title }}">
    <meta name="description" content="{{ $article->meta_description }}">
    <meta name="keywords" content="{{ $article->keywords }}" />
    <title>Новости - {{ $article->title }}</title>
@endsection
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark section-overlay-1" style="background-image: url(images/breadcrumbs-image-3.jpg);">
        <div class="container">
            <div class="breadcrumbs-custom__main">
                <h1 class="breadcrumbs-custom-title">Новости</h1>
                <div class="breadcrumbs-custom__text">
                    <h4>Самые актуальные новости</h4>
                </div>
            </div>
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('blog') }}">Новости</a></li>
                <li class="active">Статья</li>
            </ul>
        </div>
    </section>

    <!-- Blog-->
    <section class="section section-md bg-gray-100">
        <div class="container">
            <div class="blog-layout">
                <div class="blog-layout__main">
                    <div class="blog-layout__main-item">
                        <!-- Post Creative-->
                        <article class="post-creative">
                            <div class="post-creative__header">
                                <div class="badge badge-primary">{{ $article->category->name }}</div>
                                <p class="post-creative__title">{{ $article->title }}</p>
                                <ul class="list-inline-bordered">
                                    <li><span class="icon mdi mdi-clock"></span>
                                        <time class="post-creative__time">{{ $article->date->diffForHumans() }}</time>
                                    </li>
                                    <li><span class="icon mdi mdi-eye"></span><span>{{ $article->views }}</span></li>
                                </ul>
                            </div>
                            <div class="post-creative__media"><img src="/{{ $article->image }}" alt="" style="width:769px;height:454px"/>
                            </div>
                            <div class="post-creative__main">
                                {!! $article->content !!}
                            </div>
                            <div class="post-creative__footer">
                                <div class="post-creative__meta">
                                    <strong><p>автор: {{ config('app.name') }}</p></strong>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="blog-layout__main-item">
                        <!-- Section Header-->
                        <div class="section__header">
                            <h5>Последние новости</h5>
                            <div class="section__header-element">
                                <div class="owl-navigation-outer" id="post-carousel-nav"></div>
                            </div>
                        </div>
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel-post-classic" data-items="1" data-sm-items="2" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-navigation-container="#post-carousel-nav">
                            @foreach($lasts as $last)
                            <div class="item">
                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic__media">
                                        <div class="badge badge-primary">{{ $last->category->name }}</div>
                                        <a class="post-classic__image-link" href="{{ route('article', $last->slug) }}">
                                            <img src="/{{$last->image}}" alt="" style="width:369px; height:243px"/>
                                        </a>
                                    </div>
                                    <div class="post-classic__main">
                                        <h5 class="post-classic__title"><a href="{{ route('article', $last->slug) }}">{{$last->title}}</a></h5>
                                        <div class="post-classic__meta">
                                            <time class="post-classic__time">{{ $last->date->diffForHumans() }}</time>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="blog-layout__aside">
                    <div class="blog-layout__item">
                        <div class="blog-layout__item-header">
                            <h5>Популярный новости</h5>
                        </div>
                        <div class="blog-layout__item-main">
                            <div class="post-preview-group">
                                @foreach($populars as $popular)
                                <!-- Post Preview-->
                                <article class="post-preview">
                                    <a class="post-preview__image-outer" href="{{ route('article', $popular->slug) }}">
                                        <img class="post-preview__image"
                                             src="/{{$popular->image}}" style="width:85px; height:85px"/>
                                    </a>
                                    <div class="post-preview__main">
                                        <p class="post-preview__title"><a href="{{ route('article', $popular->slug) }}">
                                                {{ $popular->title }}
                                            </a></p>
                                        <time class="post-preview__time">{{ $popular->date->diffForHumans() }}</time>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
{{--                    <div class="blog-layout__item">--}}
{{--                        <div class="blog-layout__item-header">--}}
{{--                            <h5>Tags</h5>--}}
{{--                        </div>--}}
{{--                        <div class="blog-layout__item-main">--}}
{{--                            <ul class="list-tags">--}}
{{--                                <li><a href="#">Market</a></li>--}}
{{--                                <li><a href="#">Bitcoin</a></li>--}}
{{--                                <li><a href="#">Equipment</a></li>--}}
{{--                                <li><a href="#">Price</a></li>--}}
{{--                                <li><a href="#">Cryptocurrency</a></li>--}}
{{--                                <li><a href="#">News</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
