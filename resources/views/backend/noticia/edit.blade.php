@extends('backend.layouts.main')

@section('title', 'Noticia: '. $noticia->titulo)

@section('menu-contextual')
  @parent
  <li><a href="{{ route('backend.noticia.index' }}">Listado</a></li>
  <li><a href="{{ route('frontend.noticia.show', ["id" => $noticia->id]) }}">Ver en frontend</a></li>
  <li><a href="{{ route('backend.noticia.create') }}">Nueva</a></li>
  <li><a href="#">Eliminar</a></li>
@endsection

@section('content')
  <h1>{{ $noticia->titulo }}</h1>
  <h2>{{ $noticia->cuerpo }}</h2>
@endsection
