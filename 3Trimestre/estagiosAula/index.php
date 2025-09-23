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
        echo "<table>";
        echo "<tr>";
        echo "<td>Descrição</td>";
        echo "<td>Empresa</td>";
        echo "<td>Data</td>";
        echo "</tr>";
        foreach($vagas as $vaga){
            if($vaga->status==1){
                echo "<tr>";
                echo "<td>{$vaga->descricao}</td><td>{$vaga->empresa}</td><td>{$vaga->data}</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
    <a href='loginForm.php'>Fazer login</a>  
</body>
</html>