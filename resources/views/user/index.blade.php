@extends('main')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-test.css')}}">
@endsection
@section('content')
<div class="container w-100 h-100 margin-top-150 background-color-user-profile">
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
            <div>
                <a class="btn follow-button">
                    follow
                </a>
            </div>
            <div>
                <div class="d-inline-block">
                    <i class="fa fa-instagram fa-2x social-icon"></i>
                </div>
                <div class="d-inline-block">
                    <i class="fa fa-facebook fa-2x social-icon"></i>
                </div>
                <div class="d-inline-block">
                    <i class="fa fa-twitter fa-2x social-icon"></i>
                </div>
            </div>
        </div>
</div>
<a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
@endsection

