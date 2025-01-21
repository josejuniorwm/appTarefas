<?php

  class Conexao {

    private $host = '172.18.0.3';
    private $dbname = 'php_com_pdo';
    private $user = 'root';
    private $pass = '123';

    public function conectar () {
      try {

        $conexao = new PDO(
          "mysql:host=$this->host;dbname=$this->dbname",
          "$this->user",
          "$this->pass"

        );

        return $conexao;

      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }





  }
?>