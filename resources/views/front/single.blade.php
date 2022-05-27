@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')

                <div class="col-lg-9 mx-auto">

                {{$article->content}}
                </div>
@include('front.widgets.categorWidget')
@endsection

