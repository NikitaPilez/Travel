@extends('main')
@section('content')

    <div class="container mt-100">
        <div class="row d-flex justify-content-center">
            <h1> {{$post->header}} </h1>
            <div class="d-flex align-items-center justify-content-center mt-2">
                <h5 class="mr-2 text-black-50"> {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}} </h5>
                <div class="mb-1">
                    By <img class="user-avatar ml-1" href="{{asset('user/'.$post->user->id)}}"
                            src="https://picsum.photos/id/{{$post->id}}/50/50" alt="">
                    <a class="margin-left-username text-uppercase font-weight-bold" href="{{asset('user/'.$post->user->id)}}">{{$post->user->name}}</a>
                </div>
            </div>
            <div class="mt-4 mb-4">
                <img src="https://picsum.photos/id/{{$post->id}}/900/400" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="d-inline-block m-1"> {{count($post->comments)}} </h3>
            <i class="fa fa-comment font-size-15"></i>
            <h3 class="js-count-star d-inline-block m-1">{{count($post->stars)}} </h3>
            @if($post->currentUserIsLike())
                <i class="cursor-pointer fa fa-star js-star-post font-size-15" data-post-id="{{$post->id}}"></i>
            @else
                <i class="cursor-pointer fa fa-star-o js-star-post font-size-15" data-post-id="{{$post->id}}"></i>
            @endif
        </div>
        <div class="row m-3">
            <h3>Tags:</h3>
            @foreach($post->tags as $tag)
                <div class="d-inline-block m-1">
                    <a class="border-tags color-gray" href="{{asset('tag/'.$tag->name)}}">{{$tag->name}}</a>
                </div>
            @endforeach
            <h3 class="d-block">Category: <a class="text-uppercase text-black-50" href="{{asset('category/'.$post->category->name)}}">{{$post->category->name}}</a></h3>
        </div>
        <div class="m-3 font-size-15">
            {!! $post->body !!}
        </div>
{{--        Comments--}}
    </div>

    @include('general.popularPosts')
@endsection
