<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function store(Request $request) {
      //Generamos un valor random que utilizaremos cono idea
      $id = substr(md5(microtime()), 0, 4);

      //Los datos enviados por post los debemos obtener del objeto request. No son parámetros de la ruta
      $titulo = $request->input('titulo');
      $cuerpo = $request->input('cuerpo');

      //Generamos un array con los datos de la noticia
      $entrada = array("id" => $id, "titulo" => $titulo, "cuerpo" => $cuerpo);

      //Guardamos el array en la sesión utilizando el servicio del framework
      session([$id => $entrada]);

      //Devolvemos como respuesta la ruta hacia la noticia creada
      return route('noticia.show', ["id" => $id]);
    }

    public function show($id) {

      //Recuperamos los datos de la noticia
      $noticia = session()->get($id);
      $titulo = $noticia["titulo"];
      $cuerpo = $noticia["cuerpo"];

      //Mostramos la noticia
      return "<h1>" . $titulo . "</h1><br><p>" . $cuerpo . "</p>";

    }
}
