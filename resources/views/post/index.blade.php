@extends('main')
@section('content')

    <div class="container mt-100">
        <div class="row container-post-header p-5">
            <div class="row d-flex justify-content-center">
                <div class="text-center">
                    <h1> {{$post->header}} </h1>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5 class="mr-2 text-black-50"> {{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}} </h5>
                        <div class="mb-1">
                            By <a class="text-uppercase font-weight-bold animation-increase" href="{{asset('user/'.$post->user->id)}}">
                                    <img class="d-inline-block user-avatar ml-1 animation-increase" href="{{asset('user/'.$post->user->id)}}"
                                         src="https://picsum.photos/id/{{$post->id}}/50/50" alt="">
                                    {{$post->user->name}}
                               </a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4">
                    <img class="w-100 post-img-shadow" src="https://picsum.photos/id/{{$post->id}}/900/400" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center w-100">
                <h3 class="d-inline-block m-2"> {{count($post->comments)}} </h3>
                <i class="fa fa-comment font-size-15"></i>
                <h3 class="js-count-star d-inline-block m-2">{{count($post->stars)}} </h3>
                @if($post->currentUserIsLike())
                    <i class="cursor-pointer fa fa-star js-star-post font-size-15" data-post-id="{{$post->id}}"></i>
                @else
                    <i class="cursor-pointer fa fa-star-o js-star-post font-size-15" data-post-id="{{$post->id}}"></i>
                @endif
            </div>
            <div class="row m-3 d-flex flex-column">
                <div class="mb-2">
                    <h3 class="d-inline-block mr-2">Tags:</h3>
                    @foreach($post->tags as $tag)
                        <div class="d-inline-block mt-2 mb-2 animation-increase">
                            <a class="border-tags color-white" href="{{asset('tag/'.$tag->name)}}">{{$tag->name}}</a>
                        </div>
                    @endforeach
                </div>
                <h3 class="d-block">Category: <a class="text-uppercase text-black-50" href="{{asset('category/'.$post->category->name)}}">{{$post->category->name}}</a></h3>
            </div>
        </div>
        <div class="row p-5 mt-5 container-post-content">
            {!! $post->body !!}
        </div>
        <div class="row mt-5 comment-container">
            <h1 class="w-100 text-center mt-3">{{count($post->comments)}} Comments</h1>
            <div class="m-2 w-100 h-100">
               @include('post.comment')
            </div>
        </div>
    </div>

    @include('general.popularPosts')
@endsection
