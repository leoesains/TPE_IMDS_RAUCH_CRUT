<?php

require_once 'views/View.php';

class AdminController{

    private $view;

    public function __construct() {
        $this->view = new View;
    }  


    public function showAdmin(){
        $this->view->showHomeAdmin();
    }

    public function showMateriales(){
        echo("Lista de Materiales a editar");
    }

    public function showFormMaterial(){
        $this->view->showFormMaterial();
    }

    public function addMaterial(){
        echo("Captura los datos del material ingresado, los envía a la db y redirecciona a la lista de materiales de admin");
    }

}



?>
