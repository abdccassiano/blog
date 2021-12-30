<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function holaMundo() {
      return [1,2,3];
    }

    public function decirHola($persona = 'Humano') {
      return "Hola " . $persona .
      "<br /> <a href='" .route('decir.bienvenido', ["blogger" => $persona]) ."'>
      Decir Bienvenido
      </a>";
    }
}
