<?php

//require_once 'models/materialesModel.php'; 
require_once 'views/View.php';

class PublicController{

    //private $materialesModel; 
    private $view;
    private const $minRand = 1;
    private const $maxRand = 12;
    private const $maxKmPermitios = 6;

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

    public function addAviso(){
        $nombre = $_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $franja_horaria=$_POST['franja_horaria'];
        $volumen=$_POST['volumen'];
        $imagen=$_FILES['input_name']['tmp_name'];
        $nombre_imagen=$_FILES['input_name']['name'];

        if(!empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($telefono)&& !empty($email) && !empty($franja_horaria) && !empty($volumen)
        && verificarDistancia() == true){
            $this->model->insert($nombre,$apellido,$direccion,$telefono,$email,$franja_horaria,$volumen,$imagen,$nombre_imagen);
            header('location:'.BASE_URL.'avisos');
        }
        else if(verificarDistancia() == false) {
            $this->errorview->showError('La distancia de su domicilio a la planta supera los '+$maxKmPermitios+'Km');
        }
        else{
            $this->errorview->showError('Existen uno o mas campos obligatorios vacios');
        }
    }

    public function verificarDistancia(){
        
        $num = rand($minRand ,$maxRand);

        if($num > $maxKmPermitios){
            return false;
        }else{
            return true;
        }
    }
}

