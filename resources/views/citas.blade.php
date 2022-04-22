@extends('master')

@section('content')

<div class="col-3">
    <div class="alert alert-warning" role="alert" id="error_list">
        Debe seleccionar una fecha valida
    </div>


    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">AGENDAMIENTO DE CITA</h3>
        </div>
        
        <form method="post">
            {{ csrf_field() }}

            <div class="card-body">
                @if ($role == 1 || $role == 2)
                    <!-- si es admin o salud-->
                    <div class="form-group">
                        <label for="user_id" class="form-label">Seleccione una persona</label>
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
                    <label for="date" class="form-label w-100">Seleccione la fecha y hora</label>
                    <input type="datetime-local" name="date" id="date" class="form-control" onchange="onDateChange(event)">
                </div>

                <div class="form-group">
                    <label for="status_id" class="form-label">Seleccione el estado de la cita</label>
                    <select class="custom-select form-control-border border-width-2" name="status_id" required>
                        @foreach( $statuses as $key => $status )
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="btnSend">Agendar</button>
            </div>
        </form>
    </div>
</div>



<script>

    var errorList = document.getElementById("error_list");
    var btnSend = document.getElementById("btnSend");
    var dateInput = document.getElementById("dateInput");

    function onDateChange(event){
        errorList.hidden=true;
        
        let date = new Date(event.target.value + '');
        let cdate = new Date();

        if(date.getTime() < cdate.getTime()){
            errorList.hidden = false;
            console.log(event.target.value);
            btnSend.hidden = true;
        } else {
            btnSend.hidden = false;
        }
    }
</script>

@endsection
