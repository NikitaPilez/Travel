@extends('main')
@section('content')
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-05.jpg" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Jonathan Smith</a></li>
                                        <li>June 02, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-watch.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 13, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">The difference between Classics, Vintage & Antique Cars.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 12, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->

    <section class="s-content">
        <div class="row entries-wrap wide">
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
        <div class="row pagination-wrap">
            <div class="col-full">
                {{$allPosts->links('pagination')}}
            </div>
        </div>
    </section>

    @include('general.popularPosts')

@endsection
