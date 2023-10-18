<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class CrucerosView {
        private $smarty;
         
        public function __construct() {
            $this->smarty = new Smarty(); // inicializo Smarty
        }

        function MuestraCruceros($cruceros, $title) {
            // asigno variables al tpl smarty
            $this->smarty->assign('count', count($cruceros)); 
            $this->smarty->assign('cruceros', $cruceros);
            $this->smarty->assign('title', $title );
            $this->smarty->assign('nav_name', $title);
            // mostrar el tpl
            $this->smarty->display('Header.tpl');
            $this->smarty->display('crucerosList.tpl');
        }

        function MostrarDetalleCrucero($cruceros) {
            echo $cruceros->id_ciudad;
            $this->smarty->assign('cruceros', $cruceros);
            $this->smarty->assign('title', $cruceros->nombre);
            $this->smarty->assign('nav_name', $cruceros->nombre);
            $this->smarty->display('Header.tpl');
            $this->smarty->assign('id', $cruceros->id_cruceros);
            $this->smarty->assign('thing', "crucero");
            if (isset($_SESSION['IS_LOGGED'])) {
                $this->smarty->assign('delete', True);
                $this->smarty->display('opcionesdeitems.tpl');
            }
            $this->smarty->display('detalleCruceros.tpl');
        }

        function MostrarCrucerosxciudad($cruceros, $ciudad) {
            $this->smarty->assign('count', count($cruceros)); 
            $this->smarty->assign('cruceros', $cruceros);
            $this->smarty->assign('title', $ciudad->ciudad);
            $this->smarty->assign('nav_name', $ciudad->pais);
            $this->smarty->display('Header.tpl');
            $this->smarty->assign('id', $ciudad->id_ciudad);
            $this->smarty->assign('thing', "ciudad");
            if (isset($_SESSION['IS_LOGGED'])) {
                if ($cruceros == null) {
                    $this->smarty->assign('delete', True);
                }
                $this->smarty->display('opcionesdeitems.tpl');
            }
            $this->smarty->display('crucerosList.tpl');
        }

        public function MostrarFormAgregadoCruceros($ciudad) {
            $this->smarty->assign('nav_name', "Agregar Crucero");
            $this->smarty->assign('title', "Agregar Crucero");
            $this->smarty->display('Header.tpl');
            $this->smarty->assign('ciudad', $ciudad);
            $this->smarty->assign('action', 'AgregarCrucero');
            $this->smarty->assign('nav_id', ""); 
            $this->smarty->display('formCruceros.tpl');
        }

        public function MostrarFormCruceroEditado($cruceros, $ciudad) {
            $this->smarty->assign('nav_name', "Edit Crucero");
            $this->smarty->assign('title', "Edit Crucero");
            $this->smarty->display('Header.tpl');
            $this->smarty->assign('ciudad', $ciudad);
            $this->smarty->assign('action', 'Editcrucero');
            $this->smarty->assign('nav_id', '/' . $cruceros->id_cruceros);
            $this->smarty->assign('cruceros', $cruceros);
            $this->smarty->display('formCruceros.tpl');
        }
        
    }