<?php

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CiudadesView {
    private $smarty;
    
    
    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function MuestraCiudades($ciudades) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($ciudades)); 
        $this->smarty->assign('ciudades', $ciudades);
        $this->smarty->assign('title', "Ciudades");
        $this->smarty->assign('nav_name', "Ciudades");
        // mostrar el tpl
        $this->smarty->display('Header.tpl');
        $this->smarty->display('ListCiudades.tpl');
    }

    public function MuestraFormAgregarCiudad() {
        $this->smarty->assign('title', "Agregar Ciudad");
        $this->smarty->assign('nav_name', "Agregar Ciudad"); 
        $this->smarty->display('Header.tpl');
        $this->smarty->assign('action', "AgregarCiudades");
        $this->smarty->assign('nav_id', ""); 
        $this->smarty->display('formCiudad.tpl');
    }

    public function MuestraFormEditCiudad($Ciudades) {
        $this->smarty->assign('title', "Editar Ciudad");
        $this->smarty->assign('nav_name', "Editar Ciudad"); 
        $this->smarty->display('Header.tpl');
        $this->smarty->assign('action', "Editciudad");
        $this->smarty->assign('nav_id', "/" . $Ciudades->id_ciudad);
        $this->smarty->assign('Ciudades', $Ciudades); 
        $this->smarty->display('formCiudad.tpl');
    }
}