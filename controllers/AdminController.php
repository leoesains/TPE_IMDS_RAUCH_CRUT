<?php

require_once 'views/View.php';
require_once 'models/materiales.model.php';
require_once 'models/aviso.model.php';
require_once 'models/cartoneros.model.php';

class AdminController{

    private $view;
    private $materialesModel;
    private $avisosModel;
    private $cartonerosModel;
    
    public function __construct() {
        $this->view = new View();
        $this->materialesModel = new MaterialesModel();
        $this->avisosModel = new AvisoModel();
        $this->cartonerosModel = new CartonerosModel();
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
        $this->materialesModel->delMaterial($id_material);
        header('location:'.BASE_URL.'admin/materiales');
    }

    public function showActualizarMaterial($id_material){
        $material = $this->materialesModel->getMaterialById($id_material);
        $this->view->showActualizarMaterial($material); // Muestra el formulario precargado 
    }

    public function uptMaterial(){
        $id_material = $_POST['id_material'];
        $nombre = $_POST['nombre'];
        $forma_entrega = $_POST['formaDeEntrega'];
        $material = $this->materialesModel->getMaterialById($id_material);
        $imagen = $_FILES['input_name']['error'];

        //si no edita la imagen, deja la que estaba
        if (empty($nombre) || empty($forma_entrega)){
            $this->view->showActualizarMaterial($material, 'Campos incompletos!');
        }
        else if ($imagen == 4){
            $this->materialesModel->updNotImg($id_material, $nombre, $forma_entrega);
            header('location:'.BASE_URL.'admin/materiales');
        }
        else{
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
            || $_FILES['input_name']['type'] == "image/png"){
                $success = $this->materialesModel->upd($id_material, $nombre, $forma_entrega, $_FILES['input_name']['tmp_name'], $_FILES['input_name']['name']);
            }
            else{
                $success = $this->materialesModel->upd($id_material, $nombre, $forma_entrega);
            }
     
            if($success) {
                header('location:'.BASE_URL.'admin/materiales');
            } else {
                $this->view->showActualizarMaterial($material, 'No se pudo realizar la modificacion');
            }
        }
    }

    public function showAvisosDeRetiro(){
        $avisos = $this->avisosModel->getAll();
        $this->view->showAvisos($avisos);
    }

    public function showPesaje(){
        $materiales = $this->materialesModel->getAll();
        $cartoneros = $this->cartonerosModel->getAll();
        $this->view->showPesaje($materiales, $cartoneros);
    }

    public function addPesaje(){
        header('location:'.BASE_URL.'admin/pesaje');
    }

}

?>
