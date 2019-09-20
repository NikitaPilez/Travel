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
                @foreach($allPosts as $post)
                    <article class="col-block">
                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="{{asset('post/'.$post->id)}}" class="item-entry__thumb-link">
                                    <img src="https://picsum.photos/id/{{$post->id}}/300/300"
                                         alt="">
                                </a>
                            </div>
                            <div class="item-entry__text">
                                <div class="item-entry__cat">
                                    <a href="{{asset('category/'.$post->category->name)}}">{{$post->category->name}}</a>
                                </div>
                                <h1 class="item-entry__title"><a href="{{asset('post/'.$post->id)}}">{{$post->header}}</a></h1>
                                <div class="item-entry__date">
                                    <a href="{{asset('post/'.$post->id)}}">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    @include('general.popularPosts')
@endsection

