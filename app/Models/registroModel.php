<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'ced_empleado';
    protected $allowedFields = ['nombre_emp', 'email_emp', 'password_emp', 'perfil'];

}
