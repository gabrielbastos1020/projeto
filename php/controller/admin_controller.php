<?php
class AdminController {
  public static function buscarAdmin($email, $senha) {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'SELECT * FROM admin WHERE email = :email AND senha = :senha';

      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(':email', $email);
      $stmt -> bindParam(':senha', $senha);

      $stmt -> execute();

      return $stmt -> fetch();
    } catch (PDOException $err) {
      return null;
    }
  }
}