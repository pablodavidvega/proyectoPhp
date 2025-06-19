<?php
    namespace App\Controllers;

    class Productos extends BaseController{

         public function index()
          {
            $db = \Config\Database::connect();
            $consulta = $db -> query("SELECT codigo_barra, nombre_prod, stock FROM producto");
            $resultado = $consulta -> getResult();
            $arreglo  = ['titulo' => 'catalogo de productos','producto' => $resultado];
            return view('productos/catalogo', $arreglo);
          }

        public function show()
        {
            return view('productos/contacto');

        }

        public function show2($id)
        
        {
            return "detalle del producto con codigo: $id:";
        }

        public function cat($id, $cat)
        {
            return '<h2> categoria del porducto: $cat <br> no producto: $id</h2>';
        }
    }
?>