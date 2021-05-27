<?php

require_once 'views/View.php';
require_once 'models/materiales.model.php';


class AdminController{

    private $view;
    private $materialesModel;

    public function __construct() {
        $this->view = new View();
        $this->materialesModel = new MaterialesModel();

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
        $imagen = $_POST['imagen'];

        $materiales = $this->materialesModel->getAll();
        foreach ($materiales as $key => $material){
            if($nombre == $material->nombre){
                $this->view->viewError("Este nombre ya existe");
                die();
            }
        }

        if (!empty($nombre) && !empty($formaDeEntrega) && !empty($imagen)){
            $success = $this->materialesModel->insertMaterial($nombre, $formaDeEntrega, $imagen);
            if ($success){
                $this->view->showMateriales($materiales);
                header('location:'.BASE_URL.'admin/materiales');
            }
            else{
                $this->view->viewError("Este material no pudo ser cargado");
            }

        }
 
    }

}



?>
