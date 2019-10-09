@extends('main')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
@endsection
@section('content')

    @include('general.header')

    <div class="container mt-100">
        <div class="row w-100 h-100">
           @include('general.allPosts')
        </div>
        <div class="row">
            {{$allPosts->links('pagination')}}
        </div>
    </div>

    @include('general.popularPosts')

@endsection
