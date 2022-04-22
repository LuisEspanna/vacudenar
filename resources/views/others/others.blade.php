@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row my-12">

            <div class="col-lg-6 col-6">

                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $citas_pendientes->total  }}</h3>
                        <p>Citas pendientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ url('/citas/reporte/'.$id ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $citas_atendidas->total }}</h3>
                        <p>Citas atendidas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ url('/citas/reporte/'.$id ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                    <a href="{{ url('/vacunas/reporte/'.$id ) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection