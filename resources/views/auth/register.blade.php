@extends('layouts.app')

@section('content')

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> 
        <a href="{{ route('login') }}">
            <b>Sign In</b>
        </a>
    </h2>
    <h2 class="active">
        <a href="{{ route('register') }}">
            <b>Sign Up</b>
        </a>
    </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('img/user.png') }}" id="icon" alt="User Icon" class="userimg"/>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="fadeIn second form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
        
        <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        
        <input id="password" type="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        <input id="password-confirm" type="password" class="fadeIn third form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
        
        @error('name')
        <div>
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        </div>
        @enderror

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

        <input type="submit" class="fadeIn fourth" value="Register">

    </form>
  </div>
</div>

@endsection
