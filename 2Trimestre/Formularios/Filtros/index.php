<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="processa.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required id="email">
        <input type="submit" name="botao" value="Cadastra">
    </form>
    <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
    ?>
</body>
</html>
