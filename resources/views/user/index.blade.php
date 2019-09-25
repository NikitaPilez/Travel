@extends('main')
@section('assets')
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootsrap-test.css')}}">
@endsection
@section('content')
<div class="container w-100 h-100 margin-top-150 background-color-user-profile">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center background-color-white">
            <img class="user-profile-avatar" src="https://picsum.photos/id/{{$user->id}}/300/300" alt="">
            <h3>df</h3>
            <h3>df</h3>
        </div>
    </div>
</div>
@endsection

