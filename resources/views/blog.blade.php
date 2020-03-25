@extends('layouts.visit')
@section('meta')
    <title>Новости</title>
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
                <li class="active">Статьи</li>
            </ul>
        </div>
    </section>

    <!-- Blog-->
    <section class="section section-md bg-gray-100">
        <div class="container">
            <div class="blog-layout">
                <div class="blog-layout__main">
                    @foreach($articles as $article)
                    <!-- Post Creative-->
                    <article class="post-creative">
                        <div class="post-creative__header">
                            <div class="badge badge-primary">{{ $article->category->name }}</div>
                            <p class="post-creative__title"><a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a></p>
                            <ul class="list-inline-bordered">
                                <li><span class="icon mdi mdi-clock"></span>
                                    <time class="post-creative__time" >{{ $article->date->diffForHumans() }}</time>
                                </li>
                                <li><span class="icon mdi mdi-eye"></span><span>{{ $article->views }}</span></li>
                            </ul>
                        </div>
                        <div class="post-creative__media">
                            <a class="post-creative__image-link" href="{{ route('article', $article->slug) }}">
                                <img src="{{ $article->image }}" alt="{{ $article->image_alt }}" style="width:769px; height:454px"/>
                            </a>
                        </div>
                        <div class="post-creative__main">
                            <p>{!! substr($article->content, 0, 150) !!}</p>
                        </div>
                        <div class="post-creative__footer">
                            <div class="post-creative__meta">
                                <strong><p>автор: {{ config('app.name') }}</p></strong>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <!-- Pagination box-->
                    <div class="pagination-box">
                        {{ $articles->links() }}
                    </div>
                </div>
                <div class="blog-layout__aside">
                    <div class="blog-layout__item">
                        <div class="blog-layout__item-header">
                            <h5>Популярные новости</h5>
                        </div>
                        <div class="blog-layout__item-main">
                            <div class="post-preview-group">
                                @foreach($populars as $popular)
                                <!-- Post Preview-->
                                <article class="post-preview"><a class="post-preview__image-outer" href="{{ route('article', $popular->slug) }}">
                                        <img class="post-preview__image" src="{{ $popular->image }}" alt="{{$popular->image_alt}}" style="width:85px; height:85px"/></a>
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
{{--                            <h5>Теги</h5>--}}
{{--                        </div>--}}
{{--                        <div class="blog-layout__item-main">--}}
{{--                            <ul class="list-tags">--}}
{{--                                @foreach($tags as $tag)--}}
{{--                                <li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
