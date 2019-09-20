@extends('main')
@section('content')
    <section class="s-content s-content--top-padding">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Tag: {{$tag->name}}</h1>
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                @include('general.allPosts')
            </div>
        </div>
    </section>

    @include('general.popularPosts')
@endsection

