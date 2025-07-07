<?php
    if(isset($_POST['botao'])){
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'],"Arquivos/".$_FILES['arquivo']['name'])){
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
    <title>Exercício 1</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Arquivo: <input type=file name="arquivo" accept=".jpg">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>