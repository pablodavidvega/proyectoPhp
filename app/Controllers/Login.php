<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegistroModel;

class Login extends BaseController
{
    protected $registroModel;

    public function __construct()
    {
        $this->registroModel = new RegistroModel();
    }

    public function index()
    {
        return view('paginas/login');
    }

    public function generarClave()
    {
        $clave = 'admin123';
        echo password_hash($clave, PASSWORD_DEFAULT);
    }


    public function salir()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function acceder()
    {
        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('pass_usuario');

        $usuario = $this->registroModel->verificarUsuario($email);
        // dd($usuario); 

        if (!$usuario || !password_verify($contrasena, $usuario['pass_usuario'])) {
            return redirect()->back()->with('error', 'Credenciales incorrectas.');
        }

        // Guardar sesión
        session()->set('usuario', [
            'id_usuario' => $usuario['id_usuario'],
            'nombre_usu' => $usuario['nombre_usu'],
            'email'      => $usuario['email'],
            'id_perfil'  => $usuario['id_perfil']
        ]);

        switch ($usuario['id_perfil']) {
            case 1:
                return redirect()->to('/dashAdmin');
            case 2:
                return redirect()->to('/vendedor');
            case 3:
                return redirect()->to('/clientes');
            default:
                return redirect()->to('/login');
        }
    }
}
