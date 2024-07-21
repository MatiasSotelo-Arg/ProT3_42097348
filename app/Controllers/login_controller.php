<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form','url']);

        $dato['titulo']='login';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth() 
    {
        // carga la session en esta var
        $session = session();
        // instanciamos el modelo en esta var
        $model = new usuario_Model();

        // datos del form 
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        // busca de la tabla cuando email = $email cuando encuentra la primer coincidencia
        $data = $model->where('email', $email)->first();
        if($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login_controller');
            }

            $verify_pass = password_verify($password, $pass);

            if($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'appelido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                // si cumple la verificacion inicia la sesion
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!!');
                return redirect()->to('/panel');
            } else {
                // si no pasa la validacion
                $session->setFlashdata('msg'. 'Password Incorrecta');
                return redirect()->to('/login_controller');
            }


        } else {
            $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
            return redirect()->to('/login_controller');
        }
    }

    public function logout() 
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}