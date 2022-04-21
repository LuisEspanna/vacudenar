@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h3>Seleccione su vacuna</h3>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Ingrese número de dosis</label><br>
                  </div>
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                  Dosis
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">1</button>
                  <button class="dropdown-item" type="button">2</button>
                  <button class="dropdown-item" type="button">3</button>
                  <button class="dropdown-item" type="button">4</button>
                </div>
              </div>
            </div>
            <br>
              <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label class="col-form-label">Ingrese la farmacéutica de la vacuna</label><br>
                </div>
                <br>
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                      Famacéutica
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">Aztrazeneca</button>
                      <button class="dropdown-item" type="button">Moderna</button>
                      <button class="dropdown-item" type="button">Pfizer</button>
                      <button class="dropdown-item" type="button">Jansen</button>
                      <button class="dropdown-item" type="button">Sinovac</button>
                    </div>
                  </div>
              </div>

              <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label class="col-form-label">Fecha vacuna</label><br>
                </div>
                <br>
                <input class="" type="date">
              </div>
              <br>
              <div>
                <button type="button" class="btn btn-success">Guardar</button>
              </div>
              
        </div>
         
               

              
        </div>
    </div>
</div>
@endsection
