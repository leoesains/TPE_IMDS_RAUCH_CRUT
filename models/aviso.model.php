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
        $target = 'uploads/images/' . uniqid("", true) . "." . strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
        move_uploaded_file($imagen, $target);
        return $target;
    }

    public function getAll() {
        $sql = "SELECT * FROM aviso_de_retiro";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $avisos = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todos los materiales en $materiales (arreglo)
        return $avisos;
    }
}