@extends('main')
@section('content')
    <section class="s-content s-content--narrow">
        <article class="row entry format-standard">
            <div class="entry__header col-full">
                <h3 class="entry__header-title ">
                   {{$post->header}}
                </h3>
                <ul class="entry__header-meta d-flex justify-content-center align-items-center">
                    <img class="user-avatar" href="{{asset('user/'.$post->user->id)}}" src="https://picsum.photos/id/{{$post->id}}/50/50" alt="">
                    <a class="margin-left-username" href="{{asset('user/'.$post->user->id)}}">{{$post->user->name}}</a>
                    <li class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</li>
                </ul>
            </div>
            <div class="col-full text-center">
                <div class="entry__post-thumb">
                    <img src="https://picsum.photos/id/{{$post->id}}/900/400"
                         alt="">
                </div>
                <p class="font-size-star color-gray">
                    {{count($post->comments)}}
                    <i class="fa fa-comment"></i>
                    {{count($post->stars)}}
                    @if($post->currentUserIsLike())
                        <i class="cursor-pointer fas fa-star js-star-post" data-post-id="{{$post->id}}"></i>
                    @else
                        <i class="cursor-pointer far fa-star js-star-post" data-post-id="{{$post->id}}"></i>
                    @endif
                </p>
            </div>
            <div class="col-full">
                {!! $post->body !!}
            </div>
            <div class="entry__taxonomies">
                <div class="entry__cat">
                    <h5>Posted In:
                        <a href="{{asset('category/'.$post->category->name)}}">{{$post->category->name}}</a>
                    </h5>
                </div>
                <div class="entry__tags">
                    <h5>Tags: </h5>
                    <span class="entry__tax-list entry__tax-list--pill">
                        @foreach($post->tags as $tag)
                            <a href="{{asset('tag/'.$tag->name)}}">{{$tag->name}}</a>
                        @endforeach
                    </span>
                </div>
            </div>
        </article>

        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="{{asset('post/'.$previousPost->id)}}" rel="prev">
                        <span>Previous Post</span>
                        {{$previousPost->header}}
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="{{asset('post/'.$nextPost->id)}}" rel="next">
                        <span>Next Post</span>
                        {{$nextPost->header}}
                    </a>
                </div>
            </div>
        </div>

        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <h3 class="h2">{{count($post->comments)}} comments</h3>
                    <ol class="commentlist">
                        @foreach($post->comments as $comment)
                        <li class="depth-1 comment">
                            <div class="comment__avatar">
                                <a href="{{asset('user/'.$comment->user->id)}}">
                                    <img class="avatar" src="https://picsum.photos/id/{{$comment->id}}/50/50" alt="" width="50" height="50">
                                </a>
                            </div>
                            <div class="comment__content">
                                <div class="comment__info">
                                    <a href="{{asset('user/'.$comment->user->id)}}">
                                        <div class="comment__author">{{$comment->user->name}}</div>
                                    </a>
                                    <div class="comment__meta">
                                        <div class="comment__time">{{\Carbon\Carbon::parse($comment->created_at)->format('d F Y')}}</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment__text">
                                    <p>{{$comment->body}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        @include('general.popularPosts')
    </section>
@endsection
