<?php

//require_once 'models/materialesModel.php'; 
require_once 'views/View.php';

class PublicController{

    //private $materialesModel; 
    private $view;

    public function __construct() {
       // $this->materialesModel = new MaterialesMode();
        $this->view = new View;
    }   //---> Descomentar cuando el materialesModel esté creado 

    public function showHome(){
        $this->view->showHome();
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
            $this->view->showError("El material al que intenta acceder no existe");
        }
    }

    public function showFormAviso(){
        echo("Formulario de carga de aviso");
    }

    public function showError($error){
        echo($error);
    }

}

