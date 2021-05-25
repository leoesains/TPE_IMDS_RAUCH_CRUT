<?php

require_once 'models/db.conection.model.php';

class AvisoModel extends dbConectionModel {

    //ingresa un nuevo aviso a la BBDD
    public function insert($nombre, $apellido, $direccion, $telefono, $email, $franja_horaria, $volumen, $foto) {
        //enviamos la consulta
        $sql = "INSERT INTO aviso_de_retiro(nombre, apellido, direccion, telefono, email, franja_horaria, volumen, fotografia) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?) ";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $apellido, $direccion, $telefono, $email, $franja_horaria, $volumen, $foto]);        
    }
}