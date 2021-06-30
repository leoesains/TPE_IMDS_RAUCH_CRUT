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

    //Trae todo de la tabla stock_cartonero - (podría ir en otro modelo aparte)
    public function getStock(){
        $sql = "SELECT * FROM stock_cartonero";
        $query = $this->getConnection()->prepare($sql);    //Preparo la sentencia sql para hacer la consulta
        $query->execute();        //la ejecuto
        $stock = $query->fetchAll(PDO::FETCH_OBJ);    //Guardo todos los materiales en $materiales (arreglo)
        return $stock;
    }

    // Lo mismo que getMaterialesById($dni), solo que con la info de cartonero y material (JOIN)
    public function getStockById($dni) {
        $sql = "SELECT m.nombre AS material, st.kilos, st.fecha_entrega AS fecha 
                FROM cartonero c JOIN stock_cartonero st ON c.dni_cartonero = st.dni_cartonero 
                JOIN material m ON st.id_material = m.id_material
                WHERE c.dni_cartonero = ?";
        $query = $this->getConnection()->prepare($sql);    
        $query->execute([$dni]);        //La ejecuto
        $cartonero = $query->fetchAll(PDO::FETCH_OBJ);    
        return $cartonero;
    }

    //Devuelve un cartonero
    public function getCartonero($dni) {
        $sql = "SELECT * FROM cartonero WHERE dni_cartonero = ?";
        $query = $this->getConnection()->prepare($sql);    
        $query->execute([$dni]);        //La ejecuto
        $cartonero = $query->fetch(PDO::FETCH_OBJ);    
        return $cartonero;
    }

    //actualiza los datos de un cartonero  
    public function upd($dni, $nombre, $apellido, $direccion, $fechaNacimiento, $tipoVehiculo) {
        $sql = "UPDATE cartonero SET nombre = ?, apellido = ?, direccion = ?, fecha_nacimiento = ?, tipo_vehiculo WHERE dni_cartonero = $dni";
        $query = $this->getConnection()->prepare($sql);  
        $query->execute([$nombre, $apellido, $direccion, $fechaNacimiento, $tipoVehiculo]);        
    }
     
}