<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludar()
    {
        return view ("saludo");
    }

    public function prueba()
    {
        return view("vistaPrueba");
    }

    public function show()
    {
        echo "<h2>Ver lista de productos</h2>";
    }

     public function show2($id)
    {
        return "detalle del producto con codigo: $id:";
    }

}
