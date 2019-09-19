<section class="s-extra">
    <div class="row">
        <div class="col-seven md-six tab-full popular">
            <h3>Popular Posts</h3>
            <div class="block-1-2 block-m-full popular__posts">
                @foreach($popularPosts as $post)
                    <article class="col-block popular__post">
                        <a href="{{asset('post/'.$post->id)}}" class="popular__thumb">
                            <img src="https://picsum.photos/id/{{$post->id}}/300/300" alt="">
                        </a>
                        <h5><a href="{{asset('post/'.$post->id)}}">{{$post->header}}</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="{{asset('user/'.$post->user->id)}}">{{$post->user->name}}</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-14">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</time></span>
                        </section>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="col-four md-six tab-full end">
            <div class="row">
                <div class="col-six md-six mob-full categories">
                    <h3>Categories</h3>
                    <ul class="linklist">
                        @foreach($allCategories as $category)
                        <li><a href="{{asset('category/'.$category->name)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-six md-six mob-full sitelinks">
                    <h3>Site Links</h3>
                    <ul class="linklist">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Styles</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
