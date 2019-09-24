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
                <a href="{{asset('user/'.$post->user->id)}}" class="entry__profile-pic d-flex justify-content-center">
                    <img class="user-avatar align-items-center" src="https://picsum.photos/id/{{$post->id}}/50/50" alt="">
                    <p class="align-items-center font-weight-bold margin-left-username">{{$post->user->name}}</p>
                </a>
                <div class="item-entry__date">
                    <a href="{{asset('post/'.$post->id)}}">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</a>
                </div>
            </div>
        </div>
    </article>
@endforeach
