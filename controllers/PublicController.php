<?php

require_once 'models/aviso.model.php';
require_once 'models/materiales.model.php';
require_once 'models/secretaria.model.php'; 
require_once 'views/View.php';


class PublicController{

    private $materialesModel;
    private $secretariaModel;
    private $view;
    private $minRand;
    private $maxRand;
    private $maxKmPermitidos;
    private $maxPesoImg;

    public function __construct() {
        $this->materialesModel = new MaterialesModel();
        $this->secretariaModel = new SecretariaModel();
        $this->avisoModel = new avisoModel();
        $this->view = new View;
        $this->minRand = 1;
        $this->minRand = 12;
        $this->maxKmPermitidos = 6;
        $this->maxPesoImg = 1100000; //Peso max en bytes.
    }  

    public function showHome(){
        $this->view->showHome();
    }

    public function showLogin(){
        $this->view->showFormLogin();
    }


    //verificar que el usuario esta registrado
    public function verifyLogin(){
        $usuario = $_POST['usuario'];
        $password = $_POST['contrasenia'];
        $us = $this->secretariaModel->get($usuario);

        if(empty($usuario)) {
            $this->view->showFormLogin("Ingrese el nombre de usuario");
        } 
        else if (empty($password)){
            $this->view->showFormLogin("Ingrese la contraseña");
        }
        else{
            if(empty($us)){
                $this->view->showFormLogin("No existe el usuario");
            }
            else{
                if($us && $password == $us->contrasenia){
                    header("Location: " . BASE_URL . 'admin');
                }
                else {
                    $this->view->showFormLogin("Contraseña Incorrecta");
                }
            }
        }
    }

    public function showMateriales(){
        //Pido todos los materiales al MODELO
        $materiales = $this->materialesModel->getAll(); //--> función que trae todos los materiales

        //Envío la lista de los materiales recibidos a la vista
        $this->view->showMateriales($materiales);
    }

    public function showMaterial($id_material){
        //Pido a la BD la forma de entrega del material con el id que recibo por parámetros
        $requerimiento= $this->materialesModel->getMaterialById($id_material);

        //Mando el resultado a la vista
        if(!empty($requerimiento)){
            $this->view->showFormaDeEntrega($requerimiento); 
        }
        else {
            $this->view->viewError("El material no existe");
        }
    }

    public function showFormAviso(){
        $this->view->showFormAviso();
    }

    public function showError(){
        $this->view->viewError("Error 404!");
    }

    public function addAviso(){
        $nombre = $_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $franja_horaria=$_POST['franja_horaria'];
        $volumen=$_POST['volumen'];
        $peso=$_FILES ["input_name"] ["size"];//devuelve el valor en bytes
        $extension=$_FILES ["input_name"] ["type"];
        $imagen=$_FILES['input_name']['tmp_name'];
        $nombre_imagen=$_FILES['input_name']['name'];

        if(!empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($telefono)&& !empty($email) && !empty($franja_horaria) && !empty($volumen)){
            if($this->verificarDistancia() == true) {
                if(!empty($nombre_imagen) && $this->verificarImagen($peso, $extension) == false) {
                    $this->view->viewError('La imagen debe pesar 1Mb como maximo y ser extension jpg o png');
                }else {
                    $this->avisoModel->insert($nombre,$apellido,$direccion,$telefono,$email,$franja_horaria,$volumen,$imagen,$nombre_imagen);
                    $this->view->viewError('El aviso fue cargado exitosamente');
                }
            }else{
                $this->view->viewError('La distancia de su domicilio a la planta supera los '.$this->maxKmPermitidos.'Km permitidos');
            }
        }
        else{
            $this->view->viewError('Existen uno o mas campos obligatorios vacios');
        }
    }

    public function verificarDistancia(){
        
        $num = rand($this->minRand ,$this->maxRand);

        if($num > $this->maxKmPermitidos){
            return false;
        }else{
            return true;
        }
    }

    public function showAvisos() {
        $this->view->showAvisos();
    }

    public function verificarImagen($peso, $extension){
        if( ($peso<=$this->maxPesoImg) && ($extension == "image/jpg" || 
            $extension == "image/jpeg" || $extension == "image/png")){
            return true;
        } else{
            return false;
        }
    }
}

