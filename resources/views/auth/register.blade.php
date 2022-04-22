@extends('layouts.app')

@section('content')

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> 
        <a href="{{ route('login') }}">
            <b>INICIAR SESIÓN</b>
        </a>
    </h2>
    <h2 class="active">
        <a href="{{ route('register') }}">
            <b>REGISTRARSE</b>
        </a>
    </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('img/user.png') }}" id="icon" alt="User Icon" class="userimg"/>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="fadeIn second form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre completo">
        
        <input id="identification" type="text" class="fadeIn second form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification" autofocus placeholder="Identificación">

        <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        
        <select style="text-align: center;width: 85% ;
        margin-bottom: 5px;
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
            " class="custom-select my-2 fadeIn second" style="width: 100%;" name="gender_id">
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select>
        </br>
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
            " class="custom-select my-2 fadeIn second" style="width: 100%;" name="role_id">
            <option value="1">Administrador</option>
            <option value="2">Personal de salud</option>
            <option value="3">Estudiante</option>
            <option value="4">Empleado</option>
            <option value="5">Profesor</option>
        </select>

        <input id="address" type="text" class="fadeIn second form-control" name="address" required placeholder="Dirección">

        <input id="phone" type="number" class="fadeIn second form-control" name="phone" required placeholder="Telefono">
        
        <input id="password" type="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

        <input id="password-confirm" type="password" class="fadeIn third form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme contraseña">
        
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

        <input type="submit" class="fadeIn fourth" value="Registrar">

    </form>
  </div>
</div>

@endsection
