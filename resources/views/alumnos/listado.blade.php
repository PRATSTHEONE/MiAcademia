@extends('plantillas.plantilla')
@section('titulo')
Academia
@endsection
@section('cabecera')
Listado de Alumnos
@endsection
@section('contenido')
@if (Session::has('mensaje'))
    <div class="container mt-3 mb-3 alert-success">
    <p>{{session('mensaje')}}</p>
    </div>
@endif
<a href="{{route('alumnos.create')}}" class="btn btn-success mt-2 mb-2 normal" >Nuevo Alumno</a>
<table class="table table-dark normal">
    <thead>
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
      </tr>
    </thead>



    <tbody>
        @foreach ($alumnos as $item)
      <tr>

      <th scope="row">{{$item->id}}</th>
      <td><div class="float-right"><img src="{{asset($alumno->logo)}}" width="160px" heght="160px" class="rounded-circle"></div></td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->apellido}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->telefono}}</td>
      <td>
      <form name="borrar" action="{{route('alumnos.destroy', $item)}}" method="POST" style="white-space: nowrap">
        @csrf
        @method('DELETE')
        <a href="{{route('alumnos.edit', $item)}}" class="btn btn-warning normal">Editar</a>
        <input type="submit" class="btn btn-danger" value="Borrar">
      </form>
      </td>
      </tr>
       @endforeach

    </tbody>
  </table>
  {{$alumnos->links()}}
@endsection

