<?php
require_once './helpers/auth_helper.php';
require_once './Model/ciudad.model.php';
require_once './Model/cruceros.model.php';
require_once './View/cruceros.view.php';

class CrucerosController {
        private $modelo;
        private $ciudadModelo;
        private $view;
        private $auth_helper;

        public function __construct() {
            $this->modelo = new ModelCruceros();
            $this->ciudadModelo = new ModeloCiudad();
            $this->view = new CrucerosView();
            $this->auth_helper = new AuthHelper();
        }

        public function Mostrar_Todos_Cruceros() {
            $Cruceros = $this->modelo->GetCruceros();
            $this->view->MuestraCruceros($Cruceros, "Cruceros");
        }

        public function Detalle_De_Crucero($id) {
            $Crucero = $this->modelo->GetCrucero($id);
            if ($Crucero != null) {
                $this->view->MostrarDetalleCrucero($Crucero);
            }
            else {
                header("Location: " . BASE_URL);
            }
        }

        public function Mostrar_Crucero_Por_Ciudad($id) {
            $Crucero = $this->modelo->GetCrucero_x_ciudad($id);
            $Ciudad = $this->ciudadModelo->GetCiudad($id);
            if ($Ciudad != null) {
                $this->view->MostrarCrucerosxciudad($Crucero, $Ciudad);
            }
            else {
               header("Location: " . BASE_URL); 
            }
        }
        
        public function Mostrar_Form_Agregado_Cruceros() {
            $this->auth_helper->checkLoggedIn();
            $ciudadModelo = $this->ciudadModelo->GetCiudades();
            $this->view->MostrarFormAgregadoCruceros($ciudadModelo);
        }

        public function Mostrar_Form_Crucero_Editado($id) {
            $this->auth_helper->checkLoggedIn();
            $Crucero = $this->modelo->GetCrucero($id);
            $Ciudad = $this->ciudadModelo->GetCiudades();
            $this->view->MostrarFormCruceroEditado($Crucero, $Ciudad);
        }

        public function agregarCrucero() {
            $this->auth_helper->checkLoggedIn();
            if (isset($_POST['nombre']) && $_POST['nombre'] != "" && isset($_POST['cantidad_tripulantes']) && isset($_POST['estrellas'])) {
                $this->modelo->agregarCrucero($_POST['id_ciudad'],$_POST['nombre'], $_POST['cantidad_tripulantes'], $_POST['estrellas']);
            } 
              
        }

        public function editarCruceros($id) {
            $this->auth_helper->checkLoggedIn();
            /* if (isset($_POST['nombre']) && $_POST['nombre'] != "" && isset($_POST['cantidad_tripulantes']) && isset($_POST['estrellas'])) {
                $this->modelo->editarCruceros($id,$_POST['nombre'], $_POST['cantidad_tripulantes'], $_POST['estrellas']);
            }  */
            if (isset($_POST['nombre']) && $_POST['nombre'] != "" && isset($_POST['cantidad_tripulantes']) && isset($_POST['estrellas'])) {
                $this->modelo->editarCruceros($id,$_POST['id_ciudad'],$_POST['nombre'], $_POST['cantidad_tripulantes'], $_POST['estrellas']);
            }    
            header("Location: " . BASE_URL);
        }

        public function eliminarCrucero($id) {
            $this->auth_helper->checkLoggedIn();
            $this->modelo->eliminarCrucero($id);
            header("Location: " . BASE_URL);
        }

    }