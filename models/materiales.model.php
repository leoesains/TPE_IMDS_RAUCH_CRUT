<?php

require_once 'models/db.conection.model.php';

class MaterialesModel extends dbConectionModel {

    //Obtengo todos los materiales
    public function getAll() {
        //Hacemos la consulta
        $sql = "SELECT * FROM material";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $materiales = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todos los materiales en $materiales (arreglo)
        return $materiales;
    }
      //obtengo un requerimiento_de_recibo del material pasado por parametro
      public function getMaterialById($id_material) {
        //Enviamos la consulta
        $sql = "SELECT * FROM material WHERE id_material = ?";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute([$id_material]);        //La ejecuto
        $material = $query->fetch(PDO::FETCH_OBJ);    
        return $material;
    }

    //ingresa un nuevo material a la BBDD
    function insertMaterial($nombre_material, $requerimientos, $imagen, $nombre_imagen) {
        $pathImg= null;
        if ($imagen){
            $pathImg= $this->uploadImage($imagen, $nombre_imagen);
        }
        //enviamos la consulta
        $sql = "INSERT INTO material(nombre, requerimiento_de_recibo, img) VALUES (?, ?, ?)";
        $query = $this->getConnection()->prepare($sql);  
        $result = $query->execute([$nombre_material, $requerimientos, $pathImg]);   
        return $result;     
    }

    //Función de redirección de imagenes
    private function uploadImage($imagen, $nombre){
        $target= 'uploads/images/' . uniqid("", true) . "." . strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
        move_uploaded_file($imagen, $target);
        return $target;
    }
}