<?php
    require_once 'controllers/AdminController.php';
    require_once 'controllers/PublicController.php';
   

    // definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // decide que camino tomar según TABLA DE RUTEO
    switch ($parametros[0]) {

        case 'home':
            $controller = new PublicController;
            $controller -> showHome();
        break;

        case 'materiales':
            if(empty($parametros[1])){
                $controller = new PublicController;
                $controller -> showMateriales();
            }
            else{
                $controller = new PublicController;
                $controller -> showMaterial($parametros[1]);
            }
        break;
        
        case 'avisos':
            if(empty($parametros[1])){
                $controller = new PublicController;
                $controller -> showAvisos(); // Muestra la lista de avisos - No se desarrolla en el primer sprint
            }
            else{
                if($parametros[1] == "cargar"){
                    $controller = new PublicController;
                    $controller -> showFormAviso();
                }
                if($parametros[1] == "add"){
                    $controller = new PublicController;
                    $controller = addAviso();
                }
            }
        break;

        case 'admin':
            if(empty($parametros[1])){
                $controller = new AdminController;
                $controller -> showAdmin();
            }
            else{
                if ($parametros[1] == "materiales"){
                    if(empty($parametros[2])){
                        $controller = new AdminController;
                        $controller -> showMateriales();
                    }
                    else{
                        if($parametros[2] == "formAgregar"){
                            $controller = new AdminController;
                            $controller -> showFormMaterial();
                        }
                        else if ($parametros[2] == "add"){
                            $controller = new AdminController;
                            $controller -> addMaterial();
                        }
                        else{
                            $controller = new PublicController;
                            $controller->showError();
                        }
                    }
                }
            }
                               
        break;

        default :
            $controller = new PublicController;
            $controller->showError();
        break;
    }

?>