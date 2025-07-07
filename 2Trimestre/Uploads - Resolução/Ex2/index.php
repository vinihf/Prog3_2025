<?php
    if(isset($_POST['botao'])){
        
        if(!file_exists("Arquivos/".$_FILES['arquivo']['name'])){
            if(move_uploaded_file($_FILES['arquivo']['tmp_name'],"Arquivos/".$_FILES['arquivo']['name'])){
                echo "Upload realizado com sucesso";
            }else{
                echo "Erro no Upload.";
            }
        }else{
            echo "O arquivo já existe.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Arquivo: <input type=file name="arquivo">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>