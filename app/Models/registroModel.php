<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre_usu', 'email', 'pass_usuario', 'id_perfil','ced_empleado'];
    protected $returnType = 'array';
    public $timestamps = false;

    // 👇 Esta es la función que agregas
    public function verificarUsuario($email)
    {
        return $this->where('email', $email)->first();
    }
}
