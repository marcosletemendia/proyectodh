@extends('layouts.master')

@section('content')
  <div class="techo">
    <h1 id="registerh1">Mi Cuenta</h1>
  </div>
  <div class="cuerpo">
    <div class="cuerpo2">
      <div class="login" id="login">
        <h2 id="loginh2">Login</h2>
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email*">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password*">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
