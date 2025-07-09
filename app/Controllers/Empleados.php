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

    // public function clientes()
    // {
    //     if(!session()->has('usuario') || session('perfil') != 4)
    //     {
    //         return redirect()->to('/login');
    //     }
    //     return view('paginas/clientes');
    // }

     public function dashAdmin()
    {
        return view('empleados/dashAdmin');
    }

    public function mostrarListado()
{
    $model = new EmpleadoModel();
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
        $model = new EmpleadoModel();
        $empleados = $model ->findAll();

        $excel = new Spreadsheet();
        $sheet = $excel->getActiveSheet();

        //Encabezados del excel
        $sheet->setCellValue('A1','cédula');
        $sheet->setCellValue('B1','Nombre');
        $sheet->setCellValue('C1','Apellido');
        $sheet->setCellValue('D1','Correo');
        $sheet->setCellValue('E1','Direccion');
        $sheet->setCellValue('F1','Telefono');

        $fila = 2;
        foreach($empleados as $emp)
        {
            $sheet ->setCellValue('A'.$fila,$emp['ced_empleado']);
            $sheet ->setCellValue('B'.$fila,$emp['nombre_emp']);
            $sheet ->setCellValue('C'.$fila,$emp['apellido_emp']);
            $sheet ->setCellValue('D'.$fila,$emp['email_emp']);
            $sheet ->setCellValue('E'.$fila,$emp['direccion_emp']);
            $sheet ->setCellValue('F'.$fila,$emp['telefono_emp']);
            $fila++;
        }
        $escribir = new Xlsx($excel);
        $filename = 'empleados_' .date('Ymd_His'). '.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $escribir->save('php://output');
        exit;
    }

      
}
?>