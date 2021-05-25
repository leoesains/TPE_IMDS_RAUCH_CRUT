<?php

// require_once 'models/materialesModel.php'; -- Una vez que esté creado
// require_once 'views/ --> nombre de la vista, una vez que esté creada

class PublicController{

    //private $materialesModel; -- Una vez haya sido creado el model
    //private $view;

    /*public function __construct() {
        $this.materialesModel = new MaterialesMode();
        $this.view = new --> view cuando se cree
    } */  //---> Descomentar cuando el materialesModel esté creado 

    public function showHome(){
        echo("home");
    }

    public function showMateriales(){
        //Pido todos los materiales al MODELO
        $materiales = $this->materialesModel->getAll(); //--> función que trae todos los materiales

        //Envío la lista de los materiales recibidos a la vista
        $this->view->showListaMateriales($materiales);
    }

    public function showMaterial($idMaterial){
        echo("detalle de material " . $idMaterial);
    }

    public function showFormAviso(){
        echo("Formulario de carga de aviso");
    }

    public function showError($error){
        echo($error);
    }

}

