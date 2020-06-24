<?php
class categoriasModel{

  private $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;' . '' , 'root' , '');
    }


}