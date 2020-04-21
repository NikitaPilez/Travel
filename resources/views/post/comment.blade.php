<div class="row mt-5 comment-container">
    <h1 class="w-100 text-center mt-3">{{count($post->comments)}} Comments</h1>
    <div class="m-2 w-100 h-100">
    @foreach($post->parentsComments as $comment)
        <div class="m-5 d-flex">
            <a href="{{asset('user/'.$comment->user->id)}}">
                <img class="comment-avatar animation-increase" href="{{asset('user/'.$comment->user->id)}}"
                     src="https://picsum.photos/id/{{$comment->id}}/50/50" alt="">
            </a>
            <div class="d-flex flex-column ml-3 w-100">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <a href="{{asset('user/'.$comment->user->id)}}" class="font-weight-bold">{{$comment->user->name}}</a>
                        <h5 class="ml-3 text-black-50">{{ \Carbon\Carbon::parse($comment->created_at)->format('d F Y')}}</h5>
                    </div>
                    <div>
                        <i class="cursor-pointer fa fa-reply text-black-50"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h4>{{$comment->body}}</h4>
                    <div>
                        <h6 class="d-inline-block">243</h6>
                        <i class="cursor-pointer fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </div>
        @foreach($comment->childComments() as $childComments)
            <div class="m-5 d-flex">
                <a href="{{asset('user/'.$childComments->user->id)}}" class="child-comment-margin">
                    <img class="comment-avatar animation-increase" href="{{asset('user/'.$childComments->user->id)}}"
                         src="https://picsum.photos/id/{{$childComments->id}}/50/50" alt="">
                </a>
                <div class="d-flex flex-column ml-3 w-100">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <a href="{{asset('user/'.$childComments->user->id)}}" class="font-weight-bold">{{$childComments->user->name}}</a>
                            <h5 class="ml-3 text-black-50">{{ \Carbon\Carbon::parse($childComments->created_at)->format('d F Y')}}</h5>
                        </div>
                        <div>
                            <i class="cursor-pointer fa fa-reply text-black-50"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4>{{$childComments->body}}</h4>
                        <div>
                            <h6 class="d-inline-block">243</h6>
                            <i class="cursor-pointer fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
        @if (!Auth::guest())
        <div class="m-5">
            <h1 class="w-100 text-center mt-3">Post your comment</h1>
            <form method="get" action="{{asset('sendComment/' . $post->id)}}">
                {{ csrf_field() }}
                <div class="my-5">
                    <div class="d-flex">
                        <a href="#">
                            <img class="comment-avatar animation-increase" href="#"
                                 src="https://picsum.photos/id/12/50/50" alt="">
                        </a>
                        <textarea name="body" class="form-control ml-3" rows="5" placeholder="Write some nice stuff or nothing..."></textarea>
                    </div>
                    @if ($errors->has('body'))
                        <h6 class="comment-danger">{{ $errors->first('body') }}</h6>
                    @endif
                    <button type="submit" class="my-4 btn-send-comment float-right text-white">Send comment</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
