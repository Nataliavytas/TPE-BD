<?php
class model{

  private $db;

    function __construct(){
      $this->db = pg_connect("host=dbases.exa.unicen.edu.ar port=6432 dbname=cursada user=unc_249810 password=249810");
    }

    function getTop10(){
      $sentencia = $this->db->prepare('SELECT id_usuario,count(id_evento) AS eventos
                                       FROM gr11_evento
                                       GROUP BY id_usuario
                                       ORDER BY eventos desc');
      $sentencia->execute();
      $top10 = $sentencia->fetchAll(PDO::FETCH_OBJ);
      return $top10;
    }

    function buscarUsuarios($patron){
      $sentencia = $this->db->prepare('');
      $sentencia->execute();
      $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
      return $usuarios;
    }

}