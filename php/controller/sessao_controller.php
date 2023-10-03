<?php

class SessaoController {
  public static function autenticarAdmin() {
    $_SESSION['authAdmin'] = true;
  }

  public static function validarAdmin() {
    if (!$_SESSION['authAdmin']) {
      header('Location: ./login.php');
    }
  }

  public static function finalizarSessao() {
    unset($_SESSION);
    session_destroy();
  }

}