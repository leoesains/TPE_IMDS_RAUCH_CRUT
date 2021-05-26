<?php

require_once 'models/db.conection.model.php';

class AvisoModel extends dbConectionModel {

    //ingresa un nuevo aviso a la BBDD
    public function insert($nombre, $apellido, $direccion, $telefono, $email, $franja_horaria, $volumen, $imagen,$nombre_imagen) {
        $path_img = null;
        if($imagen){
            $path_img = $this->uploadImage($imagen, $nombre_imagen);
        }
        //enviamos la consulta
        $sql = "INSERT INTO aviso_de_retiro(nombre, apellido, direccion, telefono, email, franja_horaria, volumen, fotografia) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $apellido, $direccion, $telefono, $email, $franja_horaria, $volumen, $path_img]);        
    }

    private function uploadImage($imagen, $nombre_imagen){
        $target = 'uploads/images/' . uniqid("", true) . "." . strtolower(pathinfo($nameImg, PATHINFO_EXTENSION));
        move_uploaded_file($imagen, $target);
        return $target;
    }
}