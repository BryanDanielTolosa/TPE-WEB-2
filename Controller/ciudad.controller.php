<?php
require_once './Model/ciudad.model.php';
require_once './View/ciudad.view.php';
require_once './helpers/auth_helper.php';

class CiudadController {
    private $view;
    private $auth_helper;
    private $modelo;

    public function __construct() {
        $this->modelo = new ModeloCiudad();
        $this->view = new CiudadesView();
        $this->auth_helper = new AuthHelper();
    }

    public function GetCiudades() {
        $Ciudades = $this->modelo->GetCiudades();
        $this->view->MuestraCiudades($Ciudades);
    }

    public function Muestra_Form_Agregar_Ciudad() {
        $this->auth_helper->checkLoggedIn();
        $this->view->MuestraFormAgregarCiudad();
    }

    public function Muestra_Form_Edit_ciudad($id) {
        $this->auth_helper->checkLoggedIn();
        $Ciudades = $this->modelo->GetCiudad($id);
        $this->view->MuestraFormEditCiudad($Ciudades);
    }

    public function Agregar_Ciudad() {
        $this->auth_helper->checkLoggedIn();
        if (isset($_POST['ciudad']) && $_POST['ciudad'] != "" && isset( $_POST['pais']) && $_POST['pais'] != "") {
            $this->modelo->insertarCiudad($_POST['ciudad'], $_POST['pais']);
        }

        header("Location: " . BASE_URL); // mandar a ciudades

    }

    public function Edit_Ciudad($id) {
        $this->auth_helper->checkLoggedIn();
        if (isset($_POST['ciudad']) && $_POST['ciudad'] != "" && isset($_POST['pais']) && ($_POST['pais'] != "")) {
            $this->modelo->editarCiudad($_POST['ciudad'], $_POST['pais'], $id);
        }
        header("Location: " . BASE_URL);
    }

    public function Eliminar_Ciudad($id) {
        $this->auth_helper->checkLoggedIn();
        $this->modelo->eliminarCiudad($id);
        header("Location: " . BASE_URL);
    }
}
