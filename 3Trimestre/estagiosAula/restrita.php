<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("location:loginForm.php");
}
if(isset($_GET['idVaga'])){
    require_once __DIR__."/classes/Vaga.php";
    Vaga::mudaStatus($_GET['idVaga']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de vagas de estágio</title>
</head>
<body>
    <?php
        require_once __DIR__."/classes/Vaga.php";
        $vagas = Vaga::findall();
        echo "<h1>Vagas abertas</h1>";
        foreach($vagas as $vaga){
            if($vaga->status==1){
                echo "{$vaga->descricao} - {$vaga->empresa} - {$vaga->data} - 
                <a href='restrita.php?idVaga={$vaga->idVaga}'>Fechar vaga</a> <br>";

            }
        }
        echo "<h1>Vagas Fechadas</h1>";
        foreach($vagas as $vaga){
            if($vaga->status==0){
                echo "{$vaga->descricao} - {$vaga->empresa} - {$vaga->data} <br>";
            }
        }
    ?>
    <a href='sair.php'>Sair</a>  
</body>
</html>