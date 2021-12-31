<div>
  <h3>{{ $noticia->titulo }}</h3>
  <p>{{ str_limit($noticia->cuerpo, 100) }}</p>
  <a href="{{ route('backend.noticia.show', ['noticia' => $noticia->id]) }}">Ver</a>
</div>
