<?php

require_once './Controller/cruceros.controller.php';
require_once './Controller/ciudad.controller.php';
require_once './Controller/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'Cruceros'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$CrucerosController = new CrucerosController();
$CiudadController = new CiudadController();


// tabla de ruteo

switch ($params[0]) {         
    case 'Cruceros':
        if (!isset($params[1]) || $params[1] == "") {
            $CrucerosController->Mostrar_Todos_Cruceros();
        }
        else {
            $CrucerosController->Detalle_De_Crucero($params[1]);  
        }
        break;
    case 'Ciudades':
        if (!isset($params[1])) {
        $CiudadController->GetCiudades();
        }
        else {
            $id= $params[1];
            $CrucerosController->Mostrar_Crucero_Por_Ciudad($id);
        }
        break;
    case 'Login':
        $Auth_Controller = new AuthController();
        $Auth_Controller->Show_Form_Login();
        break;
    case "Logout":
        $Auth_Controller = new AuthController();
        $Auth_Controller->Logout();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->Validate_User();
        break;
    case 'AgregarCrucero': 
        if (isset($params[1]) && $params[1]=="SEND") {
            $CrucerosController->agregarCrucero();
        }
        else {
            $CrucerosController->Mostrar_Form_Agregado_Cruceros();
        }
        break;
    case 'AgregarCiudades':
        if (isset($params[1]) && $params[1]=="SEND") {
            $CiudadController->Agregar_Ciudad();
        }
        else {
            $CiudadController->Muestra_Form_Agregar_Ciudad();
        }
        break;
    case 'Editciudad':
        $id = $params[1];
        if (isset($params[2]) && $params[2]=="SEND") {
            $CiudadController->Edit_Ciudad($id);
        }
        else {
            $CiudadController->Muestra_Form_Edit_ciudad($id);
        }
        break;
    case 'Editcrucero':
        $id= $params[1];
        if (isset($params[2]) && $params[2]=="SEND") {
            $CrucerosController->editarCruceros($id);
        }
        else {
            $CrucerosController->Mostrar_Form_Crucero_Editado($id);
        }
        break;
    case 'Deletecrucero':
        $id= $params[1];
        $CrucerosController->eliminarCrucero($id);
        break;
    case 'Deleteciudad':
        $id= $params[1];
        $CiudadController->Eliminar_Ciudad($id);
        break;
    default:
        echo('404 Page not found');
        break;
}