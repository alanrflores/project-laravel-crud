@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<h2>Contenido de la vista 1</h2>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@php
   echo 'Esto es una prueba de texto'
@endphp

<ul>
    @for($i = 0; $i < 10; $i++)
        <li>El valor de i es: {{$i}}</li>
    @endfor
</ul>

<ul>
    @foreach ($users as $user)
    <li>{{$user}}</li>
    @endforeach
</ul>

@if (count($users) === 1)
<span>Hay un solo elemento en el arreglo</span>
@elseif (count($users) > 1)
<span>Hay mas de 1 elemento en el arreglo</span>
@else 
<span>No hay elemento en el arreglo</span>
@endif

@endsection