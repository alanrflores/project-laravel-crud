@extends('layouts.plantillabase')
<!-- para poder verlo necesito especificarlo en nuestro controlador -->
@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Código</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $articulo)
    <tr>
        <!-- para mostrarlo es doble llave -->
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->codigo}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cantidad}}</td>
        <td>{{$articulo->precio}}</td>
        <td>{{$articulo->acciones}}</td>
        <td>
            <!-- recibe 2 parametros para poder eliminar -->
            <form action="{{ route ('articulos.destroy', $articulo->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection