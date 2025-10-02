<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("login.php");
}

if(isset($_GET['idItem'])){
    require_once __DIR__."/classes/Item.php";
    Item::mudaStatus($_GET['idItem']);    
}

require_once __DIR__."/classes/Item.php";
$itens = Item::findall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Achados e Perdidos</title>
</head>
<body>
    <h1>Itens Perdidos</h1>
    <?php
        foreach($itens as $item){
            if($item->status == 1){
                echo "{$item->descricao} - {$item->local} - {$item->data} <a href='restrita.php?idItem={$item->idItem}'>Alterar status</a>";
                echo "<br>";
            }
        }
    ?>
    <h1>Itens Achados</h1>
    <?php
        foreach($itens as $item){
            if($item->status == 0){
                echo "{$item->descricao} - {$item->local} - {$item->data}";
                echo "<br>";
            }
        }
    ?>
    <a href='formCadItem.php'>Cadastrar item</a>
</body>
</html>