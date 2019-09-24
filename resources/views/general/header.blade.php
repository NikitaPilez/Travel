<header class="s-header header">
    <div class="header__logo">
        <a class="logo" href="{{asset('/')}}">
            <img src="{{asset('images/logo.svg')}}" alt="Homepage">
        </a>
    </div>
    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap d-flex justify-content-center align-items-center">
        <h2 class="header__nav-heading h6">Navigate to</h2>
        <ul class="header__nav">
            <li class="current"><a href="{{asset('/')}}" title="">Home</a></li>
            <li class="has-children">
                <a href="#0" title="">Categories</a>
                <ul class="sub-menu">
                    @foreach($allCategories as $category)
                        <li><a href="{{asset('category/'.$category->name)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        @if(Auth::check())
        <img class="user-avatar" src="https://picsum.photos/id/3/50/50" alt="">
        @endif
        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
    </nav>
</header>
