<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model 
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'baja'];

    public function getUsuarios() {
        return $this->findAll();
    }

    public function getUsuario($id) {
        return $this->find($id);
    }

    // crea nuevo usuario 
    public function createUsuario($data) {
        return $this->insert($data);
    }

    // actualiza usuario 
    public function updateUsuario($id, $data) {
        return $this->update($id, $data);
    }

    // elimina un usuario 
    public function deleteUsuario($id) {
        return $this->delete($id);
    }
}
