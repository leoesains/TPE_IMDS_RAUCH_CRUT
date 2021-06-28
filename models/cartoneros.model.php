<?php

require_once 'models/db.conection.model.php';

class CartonerosModel extends dbConectionModel {

    //Obtengo todos los materiales
    public function getAll() {
        //Hacemos la consulta
        $sql = "SELECT * FROM cartonero";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $materiales = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todos los materiales en $materiales (arreglo)
        return $materiales;
    }

    //Agrega un registro a la tabla stock_cartonero
    public function addStock($id_material,$id_cartonero,$fecha_entrega,$kilos){
        $sql = "INSERT INTO stock_cartonero(id_material, dni_cartonero, fecha_entrega, kilos) VALUES (?, ?, ?, ?)";
        $query = $this->getConnection()->prepare($sql);  
        $result = $query->execute([$id_material,$id_cartonero,$fecha_entrega,$kilos]);   
        return $result;  
    }

    //Trae los materiales recolectados por un cartonero, según su DNI
    public function getMaterialesById($dni){
        $sql = "SELECT * FROM stock_cartonero WHERE dni_cartonero = dni";
        $query = $this->getConnection()->prepare($sql);  
        $result = $query->fetchAll(PDO::FETCH_OBJ); 

        return $result;
    }
     
}