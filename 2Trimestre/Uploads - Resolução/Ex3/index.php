<?php
    if(isset($_POST['botao'])){
        
        $extensoes_permitidas = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];

        $tipos_permitidos = [
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'application/vnd.ms-powerpoint',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            'application/vnd.oasis.opendocument.text',
            'application/vnd.oasis.opendocument.spreadsheet',
            'application/vnd.oasis.opendocument.presentation'
        ];

        $extensao_arquivo = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));
        $mime_arquivo = mime_content_type($_FILES['arquivo']['tmp_name']);

        echo $extensao_arquivo;
        echo $mime_arquivo;


        if(in_array($extensao_arquivo,$extensoes_permitidas)){
            
           if(in_array($mime_arquivo,$tipos_permitidos)){
                if(move_uploaded_file($_FILES['arquivo']['tmp_name'],"Arquivos/".$_FILES['arquivo']['name'])){
                    echo "Upload realizado com sucesso";
                }else{
                    echo "Erro no Upload.";
                }
           }else{
            echo "Tipo não permitido.";
           }
        }else{
            echo "Tipo não permitido.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Arquivo: <input type=file name="arquivo" accept=".doc, .docx, .xls, .xlsx, .ppt, .pptx">
        <input type='submit' name='botao' value='Upload'>
    </form>
</body>
</html>