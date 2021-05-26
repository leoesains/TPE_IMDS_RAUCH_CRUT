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

    //DEFAULT -> ERROR 404
    public function viewError($msj = null){
        $this->getSmarty()->assign("error", $msj);
        $this->getSmarty()->display('error.tpl');
    }

}