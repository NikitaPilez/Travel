@extends('main')
@section('content')



    <div class="container mt-100">
        <div class="row w-100 h-100">
           @include('general.allPosts')
        </div>
    </div>

    <section class="s-content">
        <div class="row pagination-wrap">
            <div class="col-full">
                {{$allPosts->links('pagination')}}
            </div>
        </div>
    </section>

    @include('general.popularPosts')

@endsection
