@foreach($allPosts as $post)
<div class="col-md-4">
    <div class="mt-5 pb-3 card-post-shadow bg-white">
        <div>
            <a href="{{asset('post/'.$post->id)}}" class="item-entry__thumb-link">
                <img class="w-100 h-100" src="https://picsum.photos/id/{{$post->id}}/500/500"
                    alt="">
            </a>
        </div>            
        <div class="text-center">
            <div class="m-3 item-category-card-post">
                <a href="{{asset('category/'.$post->category->name)}}">{{$post->category->name}}</a>
            </div>
            <div class="m-4 item-header-card-post">
                <a href="{{asset('post/'.$post->id)}}">{{$post->header}}</a>
            </div> 
            <div class="m-3">
                <a href="{{asset('user/'.$post->user->id)}}" class="d-flex justify-content-center align-items-center">
                    <img class="user-avatar align-items-center" src="https://picsum.photos/id/{{$post->id}}/50/50" alt="">
                    <h5 class="align-items-center font-weight-bold margin-left-username">{{$post->user->name}}</h5>
                </a>
            </div>
            <div class="m-4 item-footer-card-post">
                    <a class="text-black-50" href="{{asset('post/'.$post->id)}}">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</a>
                <strong class="float-right">
                    <small>
                        <i class="fa fa-comment"></i>
                        {{count($post->comments)}}
                        <i class="fa fa-star"></i>
                        {{count($post->stars)}}
                    </small> 
                </strong>
            </div>        
        </div>
    </div>         
</div>
@endforeach