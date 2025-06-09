<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label id="arquivo">Arquivo:</label>
        <input type="file" name="arquivo" id="arquivo" accept=".pdf" multiple>
        <input type="submit" name="botao" id="botao" value="Enviar">
    </form>
</body>
</html>