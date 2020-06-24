<?php
require_once "./view/.php";
require_once "./model/model.php";


class registroController {

    private $view;
    private $model;

    function __construct() {
        $this->view = new view();
        $this->model = new model();
  
    }
    
    function Home(){
        
    }
}