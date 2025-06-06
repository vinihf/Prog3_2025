<?php
    $soma = $_GET['a']+$_GET['b'];
    if ($soma%2==0){
        header("location: par.php");
    }else{
        header("location: impar.php");
    }
?>