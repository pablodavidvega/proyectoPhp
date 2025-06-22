<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmpleadoModel;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        $model = new EmpleadoModel();
        // $data['empleados'] = $model->findAll();
        return view('paginas/login');
    }

    public function acceder()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $model = new UsuarioModel();
        $datosUsuario = $model -> verificarUsuario($usuario, $password);

        if($datosUsuario) {
            // guardar datos en sesion
            session()->set('usuario', $datosUsuario['nombre_usu']);
            session()->set('perfil', $datosUsuario['id_perfil']);
            // Redireccion por perfil
            switch($datosUsuario['id_perfil'])
            {
                case 1:
                    return redirect()->to('/empleados');
                case 2:
                    return redirect()->to('/secretaria');
                case 3:
                    return redirect()->to('/vendedor');
                case 4:
                    return redirect()->to('/clientes');
                default:
                    return redirect()->to('/login');
            }
        } else {
            return redirect()->back()->with('mensaje','Credenciales incorrectas');
        }

    }

    public function salir()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
?>