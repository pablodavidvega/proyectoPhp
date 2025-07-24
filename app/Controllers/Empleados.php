<?php
namespace App\Controllers;

use App\Models\EmpleadoModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\RegistroModel;

class Empleados extends BaseController
{
    public function index()
    {
        // Validar si el usuario ha iniciado sesion
        if(!session() ->has('usuario')) {
            return redirect()->to('/login');
        }

        // Validar se el perfil es administrador (ID =1)
       if(session('usuario')['id_perfil'] != 1) {
            return redirect()->to('/login');
        }

        $model = new EmpleadoModel();
        $data['empleados'] =$model->findAll();
        return view('empleados/dashAdmin', $data);
    }

    public function vendedor()
    {
        if(!session()->has('usuario') || session('perfil') != 2)
        {
            return redirect()->to('/login');
        }
        return view('paginas/vendedor');
    }

    public function clientes()
    {
         // Validar sesión y perfil
        $usuario = session('usuario');

        if (!$usuario || !isset($usuario['id_perfil']) || $usuario['id_perfil'] != 3) {
            return redirect()->to('/login');
        }

        return view('paginas/clientes');
    }

    public function dashAdmin()
    {
        if (!session()->has('usuario') || session('usuario')['id_perfil'] != 1) {
            return redirect()->to('/login');
        }

        $usuarioModel = new \App\Models\RegistroModel();
        $usuarios = $usuarioModel->findAll();

        return view('empleados/dashAdmin', ['usuarios' => $usuarios]);
    }

    public function cambiarRol()
    {
        $idUsuario = $this->request->getPost('id_usuario');
        $nuevoRol = $this->request->getPost('id_perfil');

        $usuarioModel = new \App\Models\RegistroModel();
        $usuarioModel->update($idUsuario, ['id_perfil' => $nuevoRol]);

        return redirect()->to('/dashAdmin')->with('mensaje', 'Rol actualizado con éxito.');
    }

    public function eliminarUsuario()
    {
        $id = $this->request->getPost('id_usuario');

        $usuarioModel = new \App\Models\RegistroModel();
        $usuarioModel->delete($id);

        return redirect()->to('/dashAdmin')->with('success', 'Usuario eliminado correctamente');
    }

    public function editarUsuario()
    {
        $id = $this->request->getPost('id_usuario');
        $nombre = $this->request->getPost('nombre_usu');
        $email = $this->request->getPost('email');

        $usuarioModel = new \App\Models\RegistroModel();
        $usuarioModel->update($id, [
            'nombre_usu' => $nombre,
            'email' => $email
        ]);

        return redirect()->to('/dashAdmin')->with('success', 'Usuario actualizado correctamente');
    }


    public function listarUsuarios()
    {
        if (!session()->has('usuario') || session('usuario')['id_perfil'] != 1) {
            return redirect()->to('/login');
        }

        $model = new RegistroModel();
        $data['usuarios'] = $model->findAll();

        return view('admin/lista_usuarios', ['usuarios' => $data]);
    }


    public function mostrarListado()
    {
        $model = new EmpleadoModel();

        $cedula   = $this->request->getGet('cedula');
        $nombre   = $this->request->getGet('nombre');
        $apellido = $this->request->getGet('apellido');
        $correo   = $this->request->getGet('correo');
        $direccion = $this->request->getGet('direccion');
        $telefono = $this->request->getGet('telefono');

        if ($cedula) {
            $model->like('ced_empleado', $cedula);
        }
        if ($nombre) {
            $model->like('nombre_emp', $nombre);
        }
        if ($apellido) {
            $model->like('apellido_emp', $apellido);
        }
        if ($correo) {
            $model->like('email_emp', $correo);
        }
        if ($direccion) {
            $model->like('direccion_emp', $direccion);
        }
         if ($telefono) {
            $model->like('telefono_emp', $telefono);
        }

        $data['empleados'] = $model->findAll();
        return view('empleados/listadoPersonas', $data);
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

     public function registrar_venta()
    {
        return view('/paginas/registrar_venta');
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

    public function exportarExcel()
    {
        $busqueda = $this->request->getGet('busqueda');
        $model = new RegistroModel();

        if ($busqueda) {
            $model->groupStart()
                ->like('id_usuario', $busqueda)
                ->orLike('nombre_usu', $busqueda)
                ->orLike('email', $busqueda)
                ->orLike('id_perfil', $busqueda)
                ->orLike('ced_empleado', $busqueda)
                ->groupEnd();
        }

        $usuarios = $model->findAll();

        $excel = new Spreadsheet();
        $sheet = $excel->getActiveSheet();

        // Encabezados
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Rol');
        $sheet->setCellValue('E1', 'Cédula');

        $fila = 2;
        foreach ($usuarios as $usuario) {
            $sheet->setCellValue('A' . $fila, $usuario['id_usuario']);
            $sheet->setCellValue('B' . $fila, $usuario['nombre_usu']);
            $sheet->setCellValue('C' . $fila, $usuario['email']);
            $sheet->setCellValue('D' . $fila, $usuario['id_perfil']);
            $sheet->setCellValue('E' . $fila, $usuario['ced_empleado']);
            $fila++;
        }

        $writer = new Xlsx($excel);
        $filename = 'usuarios_filtrados_' . date('Ymd_His') . '.xlsx';

        // Configurar cabeceras para descargar
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }
      public function registro()
    {
        return view('register');
    }

     public function guardarRegistro()
    {
       helper(['form']);

    $rules = [
        'nombre_emp' => 'required|min_length[3]',
        'email_emp'  => 'required|valid_email|is_unique[empleados.email_emp]',
        'password'   => 'required|min_length[6]',
        'confirmar'  => 'required|matches[password]'
    ];

    if (!$this->validate($rules)) {
        return view('register', [
            'validation' => $this->validator
        ]);
    }

    $model = new EmpleadoModel();
    $model->save([
        'nombre_emp'   => $this->request->getPost('nombre_emp'),
        'email_emp'    => $this->request->getPost('email_emp'),
        'password_emp' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'perfil'       => 2 // o el perfil que quieras asignar por defecto
    ]);
        // Mensaje de sesión para mostrar en login
    session()->setFlashdata('mensaje', '¡Registro exitoso! Ya puedes iniciar sesión.');

    return redirect()->to('/login');
    }
}
?>