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