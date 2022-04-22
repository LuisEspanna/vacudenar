@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table">
            <thead>
                <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Date</th>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Email</th>
                        <th scope="col">Estado</th>               
                </tr>
            </thead>
            <tbody>
                @foreach( $citas as $key => $cita )
                <tr>
                        <th>{{$cita->name}}</th>
                        <td>{{$cita->date}}</td>
                        <td>{{$cita->identification}}</td>
                        <td>{{$cita->email}}</td>
                        <td>{{$cita->status}}</td>                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection