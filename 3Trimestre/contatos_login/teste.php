<?php
  require_once __DIR__."\classes\Usuario.php";

  //$u = new Usuario("email@a.com","123");
  //$u->save();

  $usuario = Usuario::findAll();
  $usuario->excluir();
  
?>