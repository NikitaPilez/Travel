@extends('main')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootsrap-test.css')}}">
@endsection
@section('content')
<div class="container w-100 h-100 margin-top-150 background-color-user-profile">
        <div style="height: 400px;background-image: url('https://picsum.photos/id/120/1200/400')">
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <div>
                        <img class="user-profile-avatar" src="https://picsum.photos/id/3/150/150" alt="">
                    </div>
                    <div>
                       <h1 class="color-white">Nikita Pilets</h1>
                       <h3 class="color-white">Belarus, Minsk</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
</div>
@endsection

