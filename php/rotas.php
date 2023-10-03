<?php
session_start();

require ('./controller/sessao_controller.php');

require ('./conexao_db.php');
require ('./controller/admin_controller.php');
require ('./controller/docente_controller.php');
require ('./controller/discente_controller.php');

$acao = $_POST['acao'];

if($acao == 'login') {
  unset($_POST["acao"]);

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $adminExiste = AdminController::buscarAdmin($email, $senha);

  if($adminExiste) {
    SessaoController::autenticarAdmin();
    header('Location: ../');
  } else {
    header('Location: ../login.php');
  }
}

// Rotas do Docente
else if ($acao == 'criar_docente') {
  unset($_POST["acao"]);

  $nome = $_POST['nome'];
  $matricula = $_POST['matricula'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $nascimento = $_POST['nascimento'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

  DocenteController::criarDocente($nome, $matricula, $cpf, $rg, $nascimento, $endereco, $telefone, $email);

  header('Location: ../adicionarDocenteAdm.php');
}
else if ($acao == 'excluir_docente') {
  unset($_POST["acao"]);

  $id = $_POST['docente_id'];

  DocenteController::excluirDocente($id);

  header('Location: ../docentesAdm.php');
}
else if ($acao == 'atualizar_docente') {
  unset($_POST["acao"]);

  $id = $_POST['docente_id'];
  $nome = $_POST['nome'];
  $matricula = $_POST['matricula'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $nascimento = $_POST['nascimento'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

  DocenteController::atualizarDocente($id, $nome, $matricula, $cpf, $rg, $nascimento, $endereco, $telefone, $email);

  header('Location: ../docentesAdm.php');
}

// Rotas do Discente
else if ($acao == 'criar_discente') {
  unset($_POST["acao"]);

  $nome = $_POST['nome'];
  $matricula = $_POST['matricula'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $nascimento = $_POST['nascimento'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];

  DiscenteController::criarDiscente($nome, $matricula, $cpf, $rg, $nascimento, $endereco, $telefone, $email);

  header('Location: ../adicionarDiscenteAdm.php');
}
else if ($acao == 'excluir_discente') {
  unset($_POST["acao"]);

  $id = $_POST['discente_id'];

  DiscenteController::excluirDiscente($id);

  header('Location: ../discentesAdm.php');
}