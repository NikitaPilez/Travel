@extends('main')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-test.css')}}">
@endsection
@section('content')
<div class="container w-100 h-100 mt-100 background-color-user-profile mb-5">
    <div class="container-user-profile">
        <div class="d-flex align-items-center ml-4">
            <div>
                <img class="user-profile-avatar" src="https://picsum.photos/id/3/150/150" alt="">
            </div>
            <div>
                <h1 class="color-white">Nikita Pilets</h1>
                <h3 class="color-white">Belarus, Minsk</h3>
            </div>
        </div>
        <a href="" class="btn btn-follow">
            +FOLLOW
        </a>
    </div>
    <div class="container-user-info">
        <div class="p-2">
            <h3 class="m-3 text-center">Recents posts</h3>
            <div class="swiper-container swiper-container-user-posts">
                <div class="swiper-wrapper">
                    @foreach($userPosts as $post)
                        <div class="swiper-slide">
                            <a href="{{asset('post/'.$post->id)}}">
                                <img class="w-100" src="https://picsum.photos/id/{{$post->id}}/400/400"
                                     alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{asset('js/swiper.js')}}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // autoplay: {
            //     delay: 3500,
            // },
            keyboard: {
                enabled: true,
            },
        });
    </script>
@endpush
@endsection

