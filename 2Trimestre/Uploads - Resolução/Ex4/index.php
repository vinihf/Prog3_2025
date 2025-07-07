<?php
    if(isset($_POST['botao'])){
        
        $imagens = ["png", "jpg", "bmp"];
        $texto = ["doc","pdf","txt"];

        $extensao_arquivo = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

       if(in_array($extensao_arquivo,$imagens)){
        $caminho = "imagens/".$_FILES['arquivo']['name'];
       }else if(in_array($extensao_arquivo,$texto)){
        $caminho = "textos/".$_FILES['arquivo']['name'];
       }else{
        $caminho = "Arquivos/".$_FILES['arquivo']['name'];
       }
        
       if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminho)){
            echo "Upload realizado com sucesso";
        }else{
            echo "Erro no Upload.";
        }
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Arquivo: <input type=file name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>