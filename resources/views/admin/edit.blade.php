<div class="container">
    <div class="row my-4">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $productos }}</h3>
                    <p>Productos registrados</p>
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
                    <h3>0<sup style="font-size: 20px">%</sup></h3>
                    <p>Mejora</p>
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
                    <h3>{{ $usuarios }}</h3>
                    <p>Usuario registrado</p>
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
                    <h3>{{ $grupos }}</h3>
                    <p>Grupos registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Interactive Area Chart
                        </h3>
                        <div class="card-tools">
                            Real time
                            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1189" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1189px; height: 300px;"></canvas><canvas class="flot-overlay" width="1189" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1189px; height: 300px;"></canvas>
                            <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;">
                                    <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="28" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="140.08453184185606" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="256.1451379024621" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text><text x="372.2057439630682" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text><text x="488.26635002367425" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text><text x="604.3269560842803" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text><text x="720.3875621448864" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text><text x="836.4481682054924" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text><text x="952.5087742660985" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text><text x="1068.5693803267045" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text></g>
                                    <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="1" y="218.2" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="167.4" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text><text x="1" y="116.6" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text><text x="1" y="65.8" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text><text x="-6.9521484375" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">100</text></g>
                                </svg></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


</div>