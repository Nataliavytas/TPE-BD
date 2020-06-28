<?php
class model{

  private $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;' . '' , 'root' , '');
    }

    function getTop10(){
      $sentencia = $this->db->prepare('');
      $sentencia->execute();
      $top10 = $sentencia->fetchAll(PDO::FETCH_OBJ);
      return $top10;
    }

    function buscarUsuarios(){
      $sentencia = $this->db->prepare('');
      $sentencia->execute();
      $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
      return $usuarios;
    }

}