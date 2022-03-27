<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model
{
    public function registro($data){
        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');
        if($builder->insert($data) && $db->affectedRows() > 0){
            return $this->db->insertId();
        }else{
            return false;
        }
    }
    /**
     * Validar si el usuario o el correo existe en la base de datos 
     */
    public function validacion($correo,$nombre){
        $query = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' OR nombre = '$nombre'");
        $row = $query->getRow();
        if(isset($row)){
            return $row;
        }else{
            return false;
        }
    }
    public function listar(){
        $usuarios = $this->db->query("SELECT * FROM usuarios")->getResult();
        return $usuarios;
    }
}


?>