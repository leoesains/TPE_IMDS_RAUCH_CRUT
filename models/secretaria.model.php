<?php
require_once 'models/db.conection.model.php';

class SecretariaModel extends dbConectionModel {

    public function get($usuario){
        $sentencia = $this->getConnection()->prepare("SELECT * FROM secretaria WHERE nombre = ?");
        $sentencia->execute([$usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}