<?php
    if(isset($_POST['botao'])){
        
       $extensao_arquivo = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
       
       $caminho = "Arquivos/".date('d_m_y_H').".".$extensao_arquivo;
        
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
        Arquivo: <input type=file name="arquivo" accept=".png,.jpg,.bmp,.doc,.pdf,.txt">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>