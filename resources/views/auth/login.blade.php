@extends('layouts.app')

@section('content')

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> 
        <a href="{{ route('login') }}">
            <b>INICIAR SESIÓN</b>
        </a>
    </h2>
    <h2 class="inactive underlineHover">
        <a href="{{ route('register') }}">
            <b>REGISTRARSE</b>
        </a>
    </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('img/user.png') }}" id="icon" alt="User Icon" class="userimg"/>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        
        <input id="password" type="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        
        @error('email')
        <div>
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        </div>
        @enderror

        @error('password')
        <div>
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        </div>
        @enderror

        <input type="submit" class="fadeIn fourth" value="Log In">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </form>


    <!-- Remind Passowrd  {{ route('password.request') }}-->
    <div id="formFooter">
    @if (Route::has('password.request'))
        <a class="underlineHover" href="#">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    </div>

  </div>
</div>


@endsection
