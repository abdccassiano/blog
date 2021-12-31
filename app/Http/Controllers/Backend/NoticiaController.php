<?php

namespace Blog\Http\Controllers\Backend;
//use Blog\Http\Controllers\Controller;
use Blog\Factories\NoticiaFactory;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{

    public function index() {
        $listado = NoticiaFactory::generarNoticias(20);
        return view('backend.noticia.index', ['noticias' => $listado]);
    }

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
      return route('backend.noticia.show', ["id" => $id]);
    }

    public function show($id) {

      //Recuperamos los datos de la noticia

      /*$noticia = session()->get($id);
      $titulo = $noticia["titulo"];
      $cuerpo = $noticia["cuerpo"];*/

      //Mostramos la noticia
      /*return "<h1>" . $titulo . "</h1><br><p>" . $cuerpo . "</p>";*/

      /*$titulo = "Titulo de la noticia";
      $cuerpo = "Cuerpo de la noticia";
      return view('backend.noticia.show', ['titulo'] => $titulo, 'cuerpo' => $cuerpo]);*/

      $noticia = (object) array(
        'titulo' => "Titulo de la noticia",
        'cuerpo' => "Cuerpo de la noticia",
        'id' => $id);

      return view('backend.noticia.show', ['noticia' => $noticia]);

    }
}
