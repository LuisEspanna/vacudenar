@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row my-4">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $usuarios }}</h3>
                        <p>Usuarios registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $estudiantes }}</h3>
                        <p>Estudiantes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $empleados}}</h3>
                        <p>Trabajadores</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $salud }}</h3>
                        <p>Personal salud</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $citas_pendientes }}</h3>
                        <p>Citas pendientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ url('/citas/reporte' ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $citas_atendidas }}</h3>
                        <p>Citas atendidas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ url('/citas/reporte' ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col">

                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $dosis }}</h3>
                        <p>Dosis aplicadas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ url('/vacunas/reporte' ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>

        <h4>Personas vacunadas según el tipo de vacuna</h4>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="data" value="{{$results}}">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>

            const nomVacunas = {};

            const results = eval(document.getElementById("data").value);
            console.log(results);

            const colores = [
                'rgb(52, 241, 255)',
                'rgb(250, 123, 123)',
                'rgb(240, 102, 114)',
                'rgb(99, 52, 255)',
                'rgb(52, 241, 255)',
                'rgb(250, 123, 123)',
                'rgb(240, 102, 114)',
                'rgb(99, 52, 255)',
            ];
             let a = [];
             

            results.forEach((e, i) => {
                nomVacunas[e.name] = {
                    label : e.name,
                    backgroundColor : colores[i],
                    borderColor : colores[i],
                    data : [0,0,0,0,0,0,0,0,0,0,0,0],
                };
            });

            console.log(nomVacunas);

            let vacunas = results.map((e, i) => {
                nomVacunas[e.name].data = [
                    ...nomVacunas[e.name].data.slice(0, e.mes-1),
                    e.total,
                    ...nomVacunas[e.name].data.slice(e.mes)
                ];
                return nomVacunas[e.name];
            });

            const labels = [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre',
            ];

            const data = {
                labels: labels,
                datasets: vacunas
            };

            const config = {
                type: 'line',
                data: data,
                options: {}
            };


            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );

        </script>
    </div>
</div>

@endsection