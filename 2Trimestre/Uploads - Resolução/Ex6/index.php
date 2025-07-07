<?php
    if(isset($_POST['botao'])){
        
       $extensao_arquivo = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
       
       $caminho = "Arquivos/{$_POST['nome']}.".$extensao_arquivo;
        
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
    <title>Exercício 5</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Nome do arquivo: <input type=text name=nome required>
        Arquivo: <input type=file name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>