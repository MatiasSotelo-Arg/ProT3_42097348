<?php

namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controller;

class TestUsuario extends Controller
{
    public function index()
    {
        $usuarioModel = new usuario_Model();

        // Datos del nuevo usuario
        $data = [
            'nombre'    => 'adm',
            'apellido'  => 'adm',
            'usuario'   => 'adm',
            'email'     => 'adm@example.com',
            'pass'      => password_hash('adm', PASSWORD_DEFAULT),
        ];

        // Insertar el usuario
        $result = $usuarioModel->createUsuario($data);

        if ($result) {
            echo "Usuario creado exitosamente con ID: " . $result;
        } else {
            echo "Error al crear el usuario.";
        }
    }
}
