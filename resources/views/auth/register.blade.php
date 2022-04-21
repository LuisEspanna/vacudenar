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
        <input id="name" type="text" class="fadeIn second form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
        
        <input id="identification" type="text" class="fadeIn second form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification" autofocus placeholder="Identification">

        <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        
        <select style="text-align: center;width: 85% ;
         min-width: 15ch;
        max-width: 45ch;
        border: 1px solid var(--select-border);
        border-radius: 0.25em;
        padding: 0.75em 3em;
        font-size: 1rem;
        cursor: pointer;
        line-height: 1.1;
        background-color: #f6f6f6;
        background-image: linear-gradient(to top, #f6f6f6, #f6f6f6); 
            " class="custom-select" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected="selected" data-select2-id="3">Gender</option>
            <option data-select2-id="20">Male</option>
            <option data-select2-id="21">Female</option>
            </select> 
        
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
