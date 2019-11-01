<div class="bg-black">
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-8 mt-5 mb-5">
                <h3 class="text-white">Popular posts</h3>
                <div class="row d-flex align-items-center">
                @foreach($popularPosts as $post)
                    <div class="col-md-6 mt-4">
                        <div class="d-flex align-items-center">
                            <a href="{{asset('post/'.$post->id)}}">
                                <img class="popular-post-img animation-increase" src="https://picsum.photos/id/{{$post->id}}/300/300" alt="">
                            </a>
                            <div class="ml-3">
                                <h5 class="font-weigth-bold"><a class="text-white" href="{{asset('post/'.$post->id)}}">{{$post->header}}</a></h5>
                                <span class="text-white">By <a class="text-white" href="{{asset('user/'.$post->user->id)}}">{{$post->user->name}}</a></span>
                                    <span class="text-black-50"><span>on </span>{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-md-2 mt-5 mb-5">
               <h3 class="text-white">Categories</h3>
               @foreach($allCategories as $category)
                    <div class="border-category-links pb-1">
                        <a class="d-block mt-4 footer-category-links" href="{{asset('category/'.$category->name)}}">{{$category->name}}</a>
                    </div>
               @endforeach
            </div>
            <div class="col-md-2 mt-5 mb-5">
                <h3 class="text-white">Site links</h3>
                @foreach($allCategories as $category)
                    <div class="border-category-links pb-1">
                        <a class="d-block mt-4 footer-category-links" href="{{asset('category/'.$category->name)}}">{{$category->name}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
