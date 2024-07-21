<?php

namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller 
{
    public function __construct() 
    {
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] = 'Registro'; 
        echo view('front/head_view', $data); 
        echo view('front/navbar_view'); 
        echo view('back/usuario/registro');
        echo view('front/footer_view'); 
    }

    public function formValidation() {

        // Validación de campos del formulario
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', 
            'pass' => 'required|min_length[3]|max_length[10]',
        ]);

        $formModel = new usuario_Model(); 

        if (!$input) {
            $data['titulo'] = 'Registro'; 
            echo view('front/head_view', $data); 
            echo view('front/navbar_view'); 
            echo view('back/usuario/registro', $data);
            echo view('front/footer_view'); 
        } else {
            // Si la validación es exitosa, guarda los datos del usuario en la base de datos
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return redirect()->to('/login');
        }
    }    
}
