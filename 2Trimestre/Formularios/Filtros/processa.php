<?php
if(isset($_POST)){
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<h1>E-mail válido: {$email}";
  }else{
    $msg = "E-mail Inválido: {$email}";
    header("location: index.php?msg=$msg");
  }
}else{
  header("location: index.php");
}

?>