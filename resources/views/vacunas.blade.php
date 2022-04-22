@extends('master')

@section('content')

<div class="col-md-12">

    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">REGISTRAR UNA DÓSIS</h3>
        </div>
        
        <form method="post">
            {{ csrf_field() }}

            <div class="card-body">
                @if ($role == 1 || $role == 2)
                    <!-- si es admin o salud-->
                    <div class="form-group">
                        <label for="user_id" class="form-label">Seleccione el estudiante</label>
                        <select class="custom-select form-control-border border-width-2" name="user_id" required>
                            @foreach( $users as $key => $user )
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @else
                    <!-- si es estudiante, profesor o empleado -->
                    <input type="hidden" value="{{$user_id}}" name="user_id">
                @endif

                <div class="form-group">
                    <label for="cod_grupo" class="form-label">Ingrese número de dosis</label>
                    <select class="custom-select form-control-border border-width-2" name="dosis" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vaccine_id" class="form-label">Ingrese la farmacéutica de la vacuna</label>
                    <select class="custom-select form-control-border border-width-2" name="vaccine_id" required>
                        @foreach( $vaccines as $key => $vaccine )
                        <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="precio_venta" class="form-label">Fecha vacuna</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

@endsection
