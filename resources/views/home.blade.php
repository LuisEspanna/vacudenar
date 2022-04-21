@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($role == 1)
            @include('admin.admin')
        @elseif ($role == 2)
            Estudiante
        @elseif ($role == 3)
            Salud
        @else ($role > 3 )
            ERROR
        @endif
    </div>
</div>
@endsection