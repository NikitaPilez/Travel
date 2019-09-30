@extends('main')
@section('content')

    <div class="container mt-100">
        <div class="row d-flex justify-content-center">
            <h3 class="display-3 pb-3 border-category-name">Category: {{$category->name}}</h3>
            <h5 class="d-block display-4">{{$category->description}}</h5>
        </div>
        <div class="row w-100 h-100">
            @include('general.allPosts')
        </div>
        <div class="row">
            {{$allPosts->links('pagination')}}
        </div>
    </div>

    @include('general.popularPosts')
@endsection
