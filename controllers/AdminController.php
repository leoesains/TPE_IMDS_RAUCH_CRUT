<?php

class AdminController{
    public function showAdmin(){
        echo("Home de admin");
    }

    public function showMateriales(){
        echo("Lista de Materiales a editar");
    }

    public function showFormMaterial(){
        echo("Formulario de carga de un material");
    }

    public function addMaterial(){
        echo("Captura los datos del material ingresado, los envía a la db y redirecciona a la lista de materiales de admin");
    }

}



?>
