<?php

require_once 'views/View.php';
require_once 'models/materiales.model.php';
require_once 'models/aviso.model.php';


class AdminController{

    private $view;
    private $materialesModel;
    private $avisosModel;

    public function __construct() {
        $this->view = new View();
        $this->materialesModel = new MaterialesModel();
        $this->avisosModel = new AvisoModel();

    }  

    public function showAdmin(){
        $this->view->showHomeAdmin();
    }

    public function showMateriales(){
        $materiales = $this->materialesModel->getAll(); // Retorna un arreglo de clave-valor, se recorre como en la línea 37
        $this->view->showMaterialesAdmin($materiales); 
    }

    public function showFormMaterial(){
        $this->view->showFormMaterial();
    }

    public function addMaterial(){

        $nombre = $_POST['nombre'];
        $formaDeEntrega = $_POST['formaDeEntrega'];
        $imagen = $_FILES['input_name']['tmp_name'];
        $nombre_imagen=$_FILES['input_name']['name'];

        $materiales = $this->materialesModel->getAll();
        foreach ($materiales as $key => $material){
            if($nombre == $material->nombre){
                $this->view->viewError("Este nombre ya existe");
                die();
            }
        }

        if (!empty($nombre) && !empty($formaDeEntrega) && !empty($imagen)){
            $success = $this->materialesModel->insertMaterial($nombre, $formaDeEntrega, $imagen, $nombre_imagen);
            if ($success){
                $this->view->showMateriales($materiales);
                header('location:'.BASE_URL.'admin/materiales');
            }
            else{
                $this->view->viewError("Este material no pudo ser cargado");
            }

        }
 
    }

    public function showEliminarMaterial($id_material){
        $material = $this->materialesModel->getMaterialById($id_material);
        $this->view->showEliminarMaterial($material); //mensaje para confirmar el delete
    }

    public function delMaterial($id_material){

        echo ("Llamar a la función de borrado del modelo");
 
    }

    public function showActualizarMaterial($id_material){
        $material = $this->materialesModel->getMaterialById($id_material);
        $this->view->showActualizarMaterial($material); // Muestra el formulario precargado 
    }

    public function uptMaterial($id_material){

        echo ("Llamar a la función de actualizar del modelo");
         

    }
    public function showAvisosDeRetiro(){
       
        $avisos = $this->avisosModel->getAll();
       
        $this->view->showAvisos($avisos);
    }

}

    


?>
