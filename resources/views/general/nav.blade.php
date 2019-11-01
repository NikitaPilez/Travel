<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-black">
    <div class="container">
        <a class="navbar-brand text-white" href="{{asset('/')}}">Travel</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 d-flex justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="navigate-link m-2" href="{{asset('/')}}">Home</a>
                </li>
                <li>
                    <a class="navigate-link m-2" href="{{asset('/')}}">Blog</a>
                </li>
                @if(Auth::check())
               <li class="dropdown">
                    <a class="color-white m-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar" src="https://picsum.photos/id/3/50/50" alt="">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu shadow-classic" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{asset('profile')}}">Profile</a>
                      <a class="dropdown-item" href="#">Create company account</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <a class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" href="{{asset('logout')}}">Logout</a>
                    </div>
                </li>
                @else
                <li>
                    <a class="navigate-link m-2" href="{{asset('/login')}}">Login</a>
                </li>
                <li>
                    <a class="navigate-link m-2" href="{{asset('/register')}}">Register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
