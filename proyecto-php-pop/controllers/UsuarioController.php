<?php

require_once 'models/usuario.php';

class usuarioController {

    public function index() {
        echo 'Mostar Contralador Usuario desde index';
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        
        if (isset($_POST)) {
            $usuario = new Usuario();
            
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] :false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] :false;
            $email = isset($_POST['email']) ? $_POST['email'] :false;
            $password = isset($_POST['password']) ? $_POST['password'] :false;
            
            if ($nombre && $apellidos && $email && $password){
                $usuario->SetNombre($nombre);
                $usuario->SetApellidos($apellidos);
                $usuario->SetEmail($email);
                $usuario->SetPassword($password);
                $save = $usuario->save();
            
                if($save){
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }           
        } else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:".base_url.'usuario/registro');
    }

}
