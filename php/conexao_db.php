<?php
class Conexao{
  public static function conectarDatabase(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_portal_aluno";

    try {
      $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conexao;
    } catch(PDOException $e) {
      return null;
    }
  }

}