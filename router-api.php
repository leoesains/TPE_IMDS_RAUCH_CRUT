<?php

require_once 'libs/router/Router.php';
require_once 'api/api-controllers/stock-api.controller.php';

// creo el ruteador
$router = new Router();

//creo la tabla de ruteo

//--------- Comment ----------
$router->addRoute('stock', 'GET', 'StockApiController', 'getStock');
$router->addRoute('stock/:ID', 'GET', 'StockApiController', 'getStockById');


//ruteo
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);