<?php

require_once './View/auth.view.php';
require_once './Model/user.model.php';
require_once './helpers/auth_helper.php';

class AuthController {
    private $vista;
    private $modelo;

    function __construct(){
        $this->modelo = new ModeloUsuario();
        $this->vista = new AuthVista();
    }

    public function Show_Form_Login() {
        $this->vista->ShowFormLogin();
    }

    public function Validate_User() {
        // toma los datos del form
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['password'];
        
        // busco el usuario por email
        $user = $this->modelo->obtenerPorUsuario($usuario);

        // verifico que el usuario existe y que las contraseñas son iguales

        if ($user && password_verify($contraseña,$user->Clave)) {


            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->ID;
            $_SESSION['USER_NAME'] = $user->Nombre;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->vista->ShowFormLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function Logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    } 

}