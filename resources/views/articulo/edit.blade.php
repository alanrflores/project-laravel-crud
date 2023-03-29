@extends('layouts.plantillabase')
<!-- para poder verlo necesito especificarlo en nuestro controlador -->
@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
    <!-- genera un input tipo oculto genera un token 
    para que laravel no genere un error, y sepa que es un tipo submit y no explote -->
    @csrf
    <!-- a laravel debemos indicarle que vamos a usar el metodo http "put" -->
    @method('PUT')
 <div class="mb-3">
    <label class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
 </div>
 <div class="mb-3">
    <label class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
 </div>
 <div class="mb-3">
    <label class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
 </div>
 <div class="mb-3">
    <label class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" tabindex="4" value="{{$articulo->precio}}">
 </div>
 <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
 <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection