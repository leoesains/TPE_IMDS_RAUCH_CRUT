<?php

require_once 'models/cartoneros.model.php';
require_once 'api/api.view.php';

class StockApiController {
   
    protected $model;
    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); 
        $this->model = new CartonerosModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

    public function getStock() {
        $stock = $this->model->getStock();
        $this->view->response($stock, 200);
    }

    public function getStockById($params = null) {  
        $cartonero = $params[':ID'];
        $stock = $this->model->getStockById($cartonero);
        $this->view->response($stock, 200);
    }
}

