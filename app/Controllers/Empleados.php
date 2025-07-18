<?php
namespace App\Controllers;

use App\Models\EmpleadoModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        if(!session()->has('usuario') || session('perfil') != 3)
        {
            return redirect()->to('/login');
        }
        return view('paginas/clientes');
    }

     public function dashAdmin()
    {
        return view('empleados/dashAdmin');
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
    $model = new EmpleadoModel();

    // Aplica filtro si hay búsqueda
    if ($busqueda) {
        $model->like('ced_empleado', $busqueda)
              ->orLike('nombre_emp', $busqueda)
              ->orLike('apellido_emp', $busqueda)
              ->orLike('email_emp', $busqueda)
              ->orLike('direccion_emp', $busqueda)
              ->orLike('telefono_emp', $busqueda);
    }

    $empleados = $model->findAll();

    $excel = new Spreadsheet();
    $sheet = $excel->getActiveSheet();

    // Encabezados
    $sheet->setCellValue('A1','Cédula');
    $sheet->setCellValue('B1','Nombre');
    $sheet->setCellValue('C1','Apellido');
    $sheet->setCellValue('D1','Correo');
    $sheet->setCellValue('E1','Dirección');
    $sheet->setCellValue('F1','Teléfono');

    $fila = 2;
    foreach($empleados as $emp)
    {
        $sheet->setCellValue('A'.$fila, $emp['ced_empleado']);
        $sheet->setCellValue('B'.$fila, $emp['nombre_emp']);
        $sheet->setCellValue('C'.$fila, $emp['apellido_emp']);
        $sheet->setCellValue('D'.$fila, $emp['email_emp']);
        $sheet->setCellValue('E'.$fila, $emp['direccion_emp']);
        $sheet->setCellValue('F'.$fila, $emp['telefono_emp']);
        $fila++;
    }

    $escribir = new Xlsx($excel);
    $filename = 'empleados_filtrados_' . date('Ymd_His') . '.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header('Cache-Control: max-age=0');

    $escribir->save('php://output');
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