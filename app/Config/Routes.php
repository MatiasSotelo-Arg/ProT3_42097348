
<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');
 $routes->get('principal', 'Home::index');
 $routes->get('quienes_somos', 'Home::quienes_somos');
 $routes->get('acerca', 'Home::acerca');
//  $routes->get('iniciar_sesion', 'Home::iniciar_sesion');
 $routes->get('registro', 'Home::registro');

// Rutas Registro de Usuarios
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

// Rutas Login 
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');


