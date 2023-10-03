<?php
class DocenteController {
  public static function criarDocente($nome, $matricula, $cpf, $rg, $nascimento, $endereco, $telefone, $email) {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'INSERT INTO docente (matricula, cpf, rg, nome, nascimento, endereco, telefone, email) VALUES (:matricula, :cpf, :rg, :nome, :nascimento, :endereco, :telefone, :email)';

      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(':matricula', $matricula);
      $stmt -> bindParam(':cpf', $cpf);
      $stmt -> bindParam(':rg', $rg);
      $stmt -> bindParam(':nome', $nome);
      $stmt -> bindParam(':nascimento', $nascimento);
      $stmt -> bindParam(':endereco', $endereco);
      $stmt -> bindParam(':telefone', $telefone);
      $stmt -> bindParam(':email', $email);

      $stmt -> execute();

      return $stmt -> fetch();
    } catch (PDOException $err) {
      return null;
    }
  }

  public static function buscarTodosDocentes() {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'SELECT * FROM docente';

      $stmt = $conexao -> prepare($sql);

      $stmt -> execute();

      return $stmt -> fetchAll();
    } catch (PDOException $err) {
      return null;
    }
  }

  public static function excluirDocente($id) {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'DELETE FROM docente WHERE id = :id';

      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(':id', $id);

      $stmt -> execute();

      return $stmt -> fetchAll();
    } catch (PDOException $err) {
      return null;
    }
  }

  public static function buscarDocente($id) {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'SELECT * FROM docente WHERE id = :id';

      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(':id', $id);

      $stmt -> execute();

      return $stmt -> fetch();
    } catch (PDOException $err) {
      return null;
    }
  }

  public static function atualizarDocente($id, $nome, $matricula, $cpf, $rg, $nascimento, $endereco, $telefone, $email) {
    try {
      $conexao = Conexao::conectarDatabase();
      $sql = 'UPDATE docente SET matricula = :matricula, cpf = :cpf, rg = :rg, nome = :nome, nascimento = :nascimento, endereco = :endereco, telefone = :telefone, email = :email WHERE id = :id';

      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(':id', $id);
      $stmt -> bindParam(':matricula', $matricula);
      $stmt -> bindParam(':cpf', $cpf);
      $stmt -> bindParam(':rg', $rg);
      $stmt -> bindParam(':nome', $nome);
      $stmt -> bindParam(':nascimento', $nascimento);
      $stmt -> bindParam(':endereco', $endereco);
      $stmt -> bindParam(':telefone', $telefone);
      $stmt -> bindParam(':email', $email);

      $stmt -> execute();

      return $stmt -> fetch();
    } catch (PDOException $err) {
      return null;
    }
  }
}