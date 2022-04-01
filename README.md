# Sistema de vacunas en PHP UDENAR

## Ejecutar el proyecto
php artisan serve

## Variables de entorno
Si desea agregar una conexion diferente usar el archivo .env para definir la conexion

## Guia de instalacion

### Comandos para instalar dependencias
composer install
npm install

### 1. Iniciar el key
php artisan key:generate

### 2. Ejecutar las migraciones
php artisan migrate

### 3. Poblar DB con semillas
php artisan db:seed




## Se está usando ADMIN LTE, un ejenmplo de como usar 

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration

https://www.larablocks.com/package/jeroennoten/laravel-adminlte




