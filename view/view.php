<?php
require_once('./libs/Smarty.class.php');
class adminCategoriasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }

  function show(){
     $this->smarty->display('templates/inicio.tpl');
  }
}