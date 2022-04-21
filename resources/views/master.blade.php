@extends('adminlte::page')

@section('css')
    @notifyCss

    <style>
        .notify{
            z-index: 10000;
            margin-top: 50px;
        }
    </style>
@stop


@section('js')
    <x:notify-messages />
    @notifyJs
@stop
