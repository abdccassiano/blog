<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return response('Esta es nuesta home', 200)
                      ->header('content-type', 'text/plain')
                      ->header('Mi-Header-Personalizado', 'Mi Valor Personalizado')
                      ->cookie('hola-cookies', 'mi-valor-encriptado', 60);
    }

    public function bienvenido($blogger = "blogger") {
      return "Hola ".$blogger;
    }
}
