@extends('main')
@section('content')
    <div class="container mt-100">
        <div class="row d-flex justify-content-center">
            <h3 class="display-3 pb-3 border-tag-name">Tag: {{$tag->name}}</h3>
        </div>
        <div class="row w-100 h-100">
            @include('general.allPosts')
        </div>
    </div>

    @include('general.popularPosts')
@endsection

