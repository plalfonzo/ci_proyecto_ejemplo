<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = "Index";
        return view('plantillas/header_view', $data).view('plantillas/nav_view').view('contenido/inicio_view').view('plantillas/footer_view');
    }

    public function somos()
    {
        $data['titulo'] = "Quienes Somos";
        return view('plantillas/header_view', $data).view('plantillas/nav_view').view('contenido/nosotros_view').view('plantillas/footer_view');
    }
   
}
