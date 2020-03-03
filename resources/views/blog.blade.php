@extends('layouts.visit')

@section('content')
    <div class="container">
        <div class="row">
            <!-- blog post -->
            <div class="row pt-md-4">
                @foreach($articles as $article)
                    <div class="col-md-12">
                        <div class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated" style="
                        background-color: #ffffff;
                         margin-bottom: 20px; border-radius: 30px 30px 30px 30px;
                        box-shadow: 0 0 20px rgba(0,0,0,.15);">
                            <a href="{{ route('article', $article->slug) }}" class="col-md-4">
                                <img class="img-avatar card-img mt-4" style="border-radius: 10%" src="{{ $article->image }}" alt="">
                            </a>
                            <div class="text text-2 p-md-4">
                                <h3 class="mb-2"><a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a></h3>
                                <div class="meta-wrap">
                                    <p class="meta">
                                        <span><i class="icon-calendar mr-2"></i>{{ $article->date->diffForHumans() }}</span>
                                        @foreach($article->tags as $tag)
                                            <span><a href="{{ route('article', $article->slug) }}"><i class="icon-folder-o mr-2"></i>{{ $tag->name }}</a></span>
                                        @endforeach
                                    </p>
                                </div>
                                <p class="mb-4">{!! substr($article->content, 0, 200) !!}...</p>
                                <p><a href="{{ route('article', $article->slug) }}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
