<?php
namespace App\Controllers;

use App\Models\RegistroModel;

class Usuario extends BaseController
{
    protected $registroModel;

    public function __construct()
    {
        $this->registroModel = new RegistroModel();
    }

    public function register()
    {
        return view('/register');
    }

    public function registrar() 
    {
        // Recoge los datos del formulario
        $data = [
            'nombre_usu'    => $this->request->getPost('nombre_usu'),
            'email'         => $this->request->getPost('email'),
            'pass_usuario'  => password_hash($this->request->getPost('pass_usuario'), PASSWORD_DEFAULT),
            'id_perfil'     => 3, // Cliente
            'ced_empleado'  => null // No es empleado
        ];

        // Intenta insertar en la BD
        if ($this->registroModel->insert($data)) {
            return redirect()->to('/login')->with('success', 'Registro exitoso.');
        } else {
            return redirect()->back()->with('error', 'Error al registrar usuario.');
        }
    }
}
