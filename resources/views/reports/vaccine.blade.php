@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table">
            <thead>
                <tr>
                    @if ($details)
                        <th scope="col">Identificación</th>
                        <th scope="col">Nombre Vacuna</th>
                        <th scope="col">Dosis</th>
                        <th scope="col">Fecha de aplicación</th>
                        <th scope="col">Nombre Usuario</th>
                        <th scope="col">Telefono</th>
                    @else
                        <th scope="col">Nombre</th>
                        <th scope="col">Dosis</th>
                        <th scope="col">Fecha de aplicación</th>
                    @endif                    
                </tr>
            </thead>
            <tbody>
                @foreach( $vacunas as $key => $vacuna )
                <tr>
                    @if ($details)
                        <th>{{$vacuna->identification}}</th>
                        <td>{{$vacuna->vname}}</td>
                        <td>{{$vacuna->dosis}}</td>
                        <td>{{$vacuna->date}}</td>
                        <td>{{$vacuna->name}}</td>
                        <td>{{$vacuna->phone}}</td>
                    @else
                        <th>{{$vacuna->name}}</th>
                        <td>{{$vacuna->dosis}}</td>
                        <td>{{$vacuna->date}}</td>
                    @endif

                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection