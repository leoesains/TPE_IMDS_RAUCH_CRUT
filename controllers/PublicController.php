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
        //Pido a la BD la forma de entrega del material con el id que recibo por parámetros
        $material= $this->materialesModel->get($id_material);

        //Mando el resultado a la vista
        if(!empty($material)){
            $this->view->showFormaDeEntrega(); //-->VER NOMBRE DE LA FUNCIÓN
        }
        else {
            $this->view->showError("El material al que intenta acceder no existe") 
        }
    }

    public function showFormAviso(){
        echo("Formulario de carga de aviso");
    }

    public function showError($error){
        echo($error);
    }

}

