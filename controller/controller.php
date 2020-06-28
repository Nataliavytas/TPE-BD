<?php
require_once "./view/view.php";
require_once "./model/model.php";


class controller {

    private $view;
    private $model;

    function __construct() {
        $this->view = new view();
        $this->model = new model();
  
    }
    
    function Home(){
        $this->view->showInicio();
    }

    function top10(){
        $top10 = $this->model->getTop10();
        $this->view->showTop10($top10);
    }

    function buscarUsuarios($patron){
        $usuarios = $this->model->buscarUsuarios($patron);
        $this->view->showListaUsuarios($usuarios);
    }
}