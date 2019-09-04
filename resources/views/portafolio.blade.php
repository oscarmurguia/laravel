@extends('plantilla')
@section('titulo')
  Portafolio
@endsection
@section('contenido')
  <h1>Pagina de nuestro portafolio</h1>
  <ul>
    @if($portafolio)
    @foreach ($portafolio as $port)
      <li>{{$port['title']}}</li>
    @endforeach
    @else
      <li>No hay proyectos para mostrar</li>
    @endif
  </ul>

@endsection
