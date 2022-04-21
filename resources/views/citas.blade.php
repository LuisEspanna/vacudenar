@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h3>Agendamiento de cita</h3>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Seleccione Fecha</label><br>
                </div>
                <br>
                <input class="" type="date">
                

            </div>

            <div class="row g-3 align-items-center">
              
              
              <div class="col-auto">
                  <label class="col-form-label">Seleccione Hora</label><br>
              </div>
              <input class="" type="time">

          </div>
          <div>
            <button type="button" class="btn btn-success">Agendar</button>
          </div>
        </div>



    </div>

</div>
</div>
</div>
@endsection
