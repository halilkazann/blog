@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach($articles as $article)
            <div class="post-preview">
                <a href="{{route('single',$article->slug)}}">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <img src="{{$article->image}}">
                    <h3 class="post-subtitle">{{str_limit($article->content,100)}}</h3>
                </a>
                <p class="post-meta">
                    Kategori:
                    <a href="#!">{{$article->getCategory->name}}</a>
                    <span class="float-end">{{$article->created_at->diffForHumans()}}</span>
                </p>
            </div>
            <!-- Divider-->
            @if(!$loop->last)
                <hr class="my-4" />

            @endif

        @endforeach
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
@include('front.widgets.categorWidget')

@endsection

