@extends('main')
@section('content')
    <section class="s-content s-content--top-padding">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category: {{$category->name}}</h1>
                <p class="lead">{{$category->description}}</p>
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                @include('general.allPosts')
            </div>
        </div>
        <div class="row pagination-wrap">
            <div class="col-full">
                {{$allPosts->links('pagination')}}
            </div>
        </div>
    </section>

    @include('general.popularPosts')
@endsection
