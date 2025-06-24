<?php
namespace App\Controllers;

use App\Models\EmpleadoModel;

class Empleados extends BaseController
{
    public function index()
    {
        // Validar si el usuario ha iniciado sesion
        if(!session() ->has('usuario')) {
            return redirect()->to('/login');
        }

        // Validar se el perfil es administrador (ID =1)
        if(session('perfil')!= 1) {
            return redirect()->to('/login');
        }

        $model = new EmpleadoModel();
        $data['empleados'] =$model->findAll();
        return view('empleados/index', $data);
    }

    public function secretaria()
    {
        // if(session()->has('usuario') || session('perfil') != 2)
        // {
        //     return redirect()->to('/login');
        // }
        return view('paginas/secretaria');
    }

    public function vendedor()
    {
        // if(session()->has('usuario') || session('perfil') != 3)
        // {
        //     return redirect()->to('/login');
        // }
        return view('paginas/vendedor');
    }

    public function clientes()
    {
        // if(session()->has('usuario') || session('perfil') != 3)
        // {
        //     return redirect()->to('/login');
        // }
        return view('paginas/clientes');
    }
    
    public function carrito()
    {
    return view('paginas/carrito');
    
    }

    public function checkout()
    {
        return view('paginas/checkout');
    }

    public function contact()
    {
        return view('paginas/contact');
    }

    public function dash()
    {
        return view('paginas/dash');
    }

    public function detail()
    {
        return view('paginas/detail');
    }

    public function producto()
    {
        return view('paginas/producto');
    }

    public function crear()
    {
        return view('empleados/crear');
    }

    public function guardar()
    {
        $model = new EmpleadoModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/empleados');
    }

    public function editar($id)
    {
        $model = new EmpleadoModel();
        $data['empleado'] = $model->find($id);
        return view('empleados/editar', $data);
    }

      public function eliminar($id)
    {
        $model = new EmpleadoModel();
        $model->delete($id);
        return redirect()->to('/empleados');
    }

      public function actualizar($id)
      {
        $model = new EmpleadoModel();
        $model ->update($id, $this->request->getPost());
        return redirect()->to('/empleados');
      }
}
?>