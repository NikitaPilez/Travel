@extends('main')
@section('content')
    <div class="container mt-100">
        <div class="row d-flex justify-content-center">
            <div>
                <form method="POST" action="{{ route('register') }}">
                    {{csrf_field()}}

                    <label for="name">Name</label>
                    <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif

                    <label class="mt-2" for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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

                    <div class="my-2">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

