<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes -->Objeto de la clase route
// get --> metodo de peticion http
// '/productos' --> ruta en el navegador
// Productos --> nombre del controlador que manejara la solicitud 
// index --> nombre del metodo
// [] -> opciones


$routes->get('/', 'Home::index');   //ruta -> controlador-> funcion
$routes->get('/saludo', 'Home::saludar');
$routes->get('/show', 'Home::show');
$routes->get('/prueba', 'Home::prueba');
// $routes->get('/compra/(:num)' , 'Productos::show2/$1');
// $routes->get('/venta/(:num)/(:alpha)','Productos::cat/$1/$2');
// $routes->get('/producto', 'Productos::index');
$routes->get('/empleados', 'Empleados::index'); //ruta -> controlador-> funcion
$routes->get('/empleados/crear','Empleados::crear');
$routes->post('/empleados/guardar', 'Empleados::guardar');
$routes->get('/empleados/editar/(:num)', 'Empleados::editar/$1');
$routes->get('/empleados/eliminar/(:num)', 'Empleados::eliminar/$1');
$routes->post('/empleados/actualizar/(:num)', 'Empleados::actualizar/$1');

$routes->get('/login', 'Login::index');
$routes->post('/login/acceder', 'Login::acceder');
$routes->get('/logout', 'Login::salir');
$routes->get('/secretaria', 'Empleados::secretaria');
$routes->get('/vendedor', 'Empleados::vendedor');
$routes->get('/clientes', 'Empleados::clientes');

$routes->get('/carrito', 'Empleados::carrito');
$routes->get('/checkout', 'Empleados::checkout');
$routes->get('/contact', 'Empleados::contact');
$routes->get('/dash', 'Empleados::dash');
$routes->get('/detail', 'Empleados::detail');
$routes->get('/productos', 'Empleados::producto');
$routes->get('/registrar', 'Empleados::registrar_venta');
$routes->get('/dashAdmin', 'Empleados::dashAdmin');
$routes->get('/empleados/listado', 'Empleados::mostrarListado');
$routes->get('/empleados/exportar', 'Empleados::exportarExcel');

$routes->get('/registro', 'Usuario::register');
$routes->post('/registro', 'Usuario::registrar');

$routes->get('/dashAdmin/usuarios', 'Empleados::listarUsuarios');
$routes->get('login/generarClave', 'Login::generarClave');

$routes->post('admin/cambiarRol', 'Empleados::cambiarRol');
$routes->post('admin/eliminarUsuario', 'Empleados::eliminarUsuario');
$routes->post('admin/editarUsuario', 'Empleados::editarUsuario');
$routes->get('admin/exportarExcel', 'Empleados::exportarExcel');



























