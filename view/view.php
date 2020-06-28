<?php
require_once('./libs/Smarty.class.php');
class view {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }

  function showInicio(){
     $this->smarty->display('templates/inicio.tpl');
  }

  function showTop10($top10){
      $this->smarty->assign('usuarios', $top10); 
      $this->smarty->display('templates/top10.tpl');
  }

  function showListaUsuarios($usuarios){ 
   $this->smarty->assign('usuarios', $usuarios); 
   $this->smarty->display('templates/listaUsuarios.tpl');
  }

}