<div class="container">
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
                    <h3>{{ $estudiantes }}<sup style="font-size: 20px">%</sup></h3>
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
                    <h3>{{ $trabajadores}}</h3>
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
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const colores = [
            'rgb(123, 250, 244)',
            'rgb(180, 100, 245)',
            'rgb(180, 100, 200)',
            'rgb(180, 100, 200)',
            'rgb(210, 100, 200)',
            'rgb(240, 100, 200)',
            'rgb(240, 100, 200)',
        ];

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
            datasets: [{
                label: 'Moderna',
                backgroundColor: colores[0],
                borderColor: colores[0],
                data: [0, 10, 5, 2, 20, 30, 45],
            },
            {
                label: 'Pfizer',
                backgroundColor: colores[1],
                borderColor: colores[1],
                data: [4,8,2,3,0,0,1],
            }
            ]
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