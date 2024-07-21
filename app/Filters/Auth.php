<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface 
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // si no esta logueado
        if(!session()->get('logged_in')) {
            // redirecciono al login 
            return redirect()->to('/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tu lógica aquí, por ejemplo, agregar headers o modificar la respuesta
    }
}