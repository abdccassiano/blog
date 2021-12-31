@extends('backend.layouts.main')

@section('title', 'Noticia: '. 'Index')

@section('menu-contextual')
  @parent
  <li><a href="{{ route('backend.noticia.create') }}">Nueva</a></li>
@endsection

@section('content')
<?php echo "/****************Foreach*********************/"; ?>
  @foreach ($noticias as $noticia)
    <p><b>Titulo:</b> {{ $noticia->titulo }}</p>
  @endforeach

<?php echo "/****************Forelse con include subvista*********************/"; ?>
  @forelse ($noticias as $noticia)
    @if($loop->first)
      <h1>Mostrando {{ $loop->count }} noticias.</h1>
    @endif
    @include('backend.noticia.item')
  @empty
    <p>No hay noticias para mostrar</p>
  @endforelse


    <?php echo "/****************Forelse con arreglo vacio*********************/"; ?>
      <?php $noticias = array(); ?>
      @forelse ($noticias as $noticia)
        @if($loop->first)
          <h1>Mostrando {{ $loop->count }} noticias.</h1>
        @endif
        @include('backend.noticia.item')
      @empty
        <p>No hay noticias para mostrar</p>
      @endforelse

@endsection
