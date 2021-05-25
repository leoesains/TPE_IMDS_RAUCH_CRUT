<?php

class PublicController{

    public function showHome(){
        echo("home");
    }

    public function showMateriales(){
        echo("lista de materiales");
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

