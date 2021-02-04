@extends('plantillas.plantilla')
@section('titulo')
Academia
@endsection
@section('cabecera')

@endsection
@section('contenido')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $miError)
            <li>{{$miError}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card bg-secondary">
    <div class="card-header text-center text-white h3">Guardar Alumno</div>
    <div class="card-body">
    <form name="g" action="{{route('alumnos.store')}}" method='POST' enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="nom" class="col-form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nom" required>
            </div>
            <div class="col">
                <label for="ape" class="col-form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" id="ape" required>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col">
                <label for="mail" class="col-form-label">E-Mail</label>
                <input type="mail" name="mail" class="form-control" placeholder="e-mail" id="mail" required>
            </div>
            <div class="col">
                <label for="logo" class="col-form-label">Logo</label>
                <input type="file" name="logo" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col">
                <input type="submit" value="Crear" class="btn btn-success mr-3">
                <input type="reset" value="Limpiar" class="btn btn-warning mr-3">
            <a href="{{route('alumnos.index')}}" class="btn btn-info">Volver</a>

    </form>
    </div>
</div>
@endsection
