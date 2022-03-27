<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class Registro extends BaseController
{
    public $encrypter;
    public $email;
    public function __construct()
    {
        helper(array('date','sistema','url'));
        $this->encrypter = \Config\Services::encrypter();
        $this->email = \Config\Services::email();
    }
    public function index()
    {
        return view('registro');
    }
    public function registro()
    {
        /**
         * Obtener los datos del formulario de registro
         */
        $r = array();
        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');

        /**
         * La validación se hace en el modelo
         * Llamamos al modelo
         */
        $Usuarios = new UsuariosModel();
        $validacion = $Usuarios->validacion($correo,$nombre);
        if($validacion){
            $r['respuesta'] = 'no';
            $r['mensaje'] = 'El usuario o correo ya existe';
            echo json_encode($r);
            exit();
        }
        /**
         * Definimos el array de datos
         * Encriptamos la contraseña
         * Guardamos los datos en la base de datos
         */
        $data = array(
            'nombre' => $nombre,
            'correo' => $correo,
            'password' => base64_encode($this->encrypter->encrypt($password)), // Encriptamos la contraseña
            'f_creacion' => date('Y-m-d H:i:s', now()), // Fecha de creación
            'cod_activacion' => generar_codigo(70), // Generamos un código de activación
            'estado' => 'P' // P = Pendiente, A = Activo
        );

        $usuario = $Usuarios->registro($data);
        /**
         * Si el usuario se registro correctamente se envia un correo de activación
         */
        if($usuario){
            $r['respuesta'] = 'si';
            $r['mensaje'] = 'Registro exitoso! <i class="fa-solid fa-circle-check text-success"></i>';
            //Enviamos el correo de activación
            $this->email->setFrom('info@jkdevarg.com', 'JkDevArg');
            $this->email->setTo($data['correo']);
            $this->email->setSubject('Registro en JkDevArg');
            $this->email->setMessage('<h1>Bienvenido a JkDevArg</h1> <p>Para activar tu cuenta haz click en el siguiente enlace: <a href="'.base_url('registro/activar/'.$data['cod_activacion']).'">Activar cuenta</a></p>');
            $this->email->send();
        }else{
            $r['respuesta'] = 'no';
            $r['mensaje'] = 'Fallo al registrarse! <i class="fa-solid fa-triangle-exclamation text-danger"></i>';
        }
        echo json_encode($r);
        exit();
    }
}
