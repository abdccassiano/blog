<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Administrador del Blog - @yield('title')</title>
  </head>
  <body>
    <ul>
      <li><b>Menu Principal</b></li>
      <li><a href="">Noticias</a></li>
      <li><a href="">Usuarios</a></li>
    </ul>
    <ul>
      @section('menu-contextual')
        <li><b>Menu Contextual</b></li>
      @show
    </ul>
    @yield('content')
  </body>
</html>
