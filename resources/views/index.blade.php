@extends('main')
@section('content')

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
