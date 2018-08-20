@extends('layouts.login')

@section('content')
<section class="login-content">
  <div class="logo">
    <h1>Cambodia Army</h1>
  </div>
  <div class="login-box">
    <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
      <div class="form-group">
        <label class="control-label">USERNAME</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD</label>
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <div class="utility">
          <div class="animated-checkbox">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span class="label-text">Stay Signed in</span>
            </label>
          </div>
          <p class="semibold-text mb-2"><a href="{{ route('password.request') }}">Forgot Password ?</a></p>
        </div>
      </div>
      <div class="form-group btn-container">
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
      </div>
    </form>

  </div>
</section>

@endsection
