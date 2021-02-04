@extends('plantillas.plantilla')
@section('titulo')
Academia
@endsection
@section('cabecera')
Gestion de Alumnos
@endsection
@section('contenido')
@if($text=Session::get('mensaje'))
<p class="alert alert-info my-3">{{$text}}</p>
@endif
<span class="clearfix"></span>
    <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 48rem;">
        <div class="card-header text-center"><b>{{($alumno->nombre)}}</b></div>
        <div class="card-body" style="font-size: 1.1em">
            <h5 class="card-title text-center">Código: {{($alumno->id)}}</h5>
            <p class="card-text">
            <div class="float-right"><img src="{{asset($alumno->logo)}}" width="160px" heght="160px" class="rounded-circle"></div>
            <p class="card-text"><b>Nombre:</b> {{$alumno->nombre}}</p>
            <p class="card-text"><b>Apellidos:</b> {{$alumno->apellidos}}</p>
            <p class="card-text"><b>Mail:</b> {{$alumno->mail}}</p>
            <p class="card-text"><b>Telefono:</b> {{$alumno->telefono}}</p>

    <a href="{{route('alumnos.index')}}" class="mt-3 float-right btn btn-success">Volver</a>
        </div>
    </div>
@endsection
