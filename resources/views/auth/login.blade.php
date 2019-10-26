@extends('main')
@section('content')
<div class="container mt-100">
    <div class="row d-flex justify-content-center">
        <div>
            <form method="POST" action="{{ route('login') }}">
                {{csrf_field()}}
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <label class="d-block mt-2" for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label class="mt-2">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
                <div>
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
