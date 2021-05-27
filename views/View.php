<?php

require_once 'libs/Smarty/Smarty.class.php';

Class View{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }    

    public function getSmarty(){
        return $this->smarty;
    }

    public function showHome(){

        $this->getSmarty()->assign('title', 'C.R.U.T.');

        $this->getSmarty()->display('home.tpl');
        
       
    }

    public function showHomeAdmin(){

        $this->getSmarty()->assign('title', 'C.R.U.T.');

        $this->getSmarty()->display('homeAdmin.tpl');
    }

    
    //Muestra formulario para agregar nuevo material
    public function showFormMaterial(){
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->display('formAddMaterial.tpl');
    }

    //Muestra los requerimientos recibidos como parámetro
    public function showFormaDeEntrega($requerimiento) {
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->assign('requerimiento', $requerimiento);
        $this->getSmarty()->display('showRequerimiento.tpl');
    }


    
    
    //DEFAULT -> ERROR 404
    public function viewError($msj = null){
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->assign("error", $msj);
        $this->getSmarty()->display('error.tpl');
    }

    //Muestra formulario para cargar un aviso de retiro
    public function showFormAviso(){
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->display('formAddAviso.tpl');
    }
    
    public function showMateriales($materiales){
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->assign('materiales',$materiales );
        $this->getSmarty()->display('showMateriales.tpl');
    }

    public function showMaterialesAdmin($materiales){
        $this->getSmarty()->assign('title', 'C.R.U.T.');
        $this->getSmarty()->assign('materiales',$materiales );
        $this->getSmarty()->display('materialesAdmin.tpl');
    }

    public function showAvisos(){
        echo "lista de avisos";
    }
}