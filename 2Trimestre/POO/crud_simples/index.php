<?php
    $connection = new \mysqli("localhost","root","","contatos");
	$connection->set_charset("utf8");
    $sql = "select * from pessoas";
	$result = $connection->query($sql);
	$item = array();
	$data = array();
	while($item = mysqli_fetch_array($result)){
		$data[] = $item;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contatos</title>
</head>
<body>

<table>
    <tr>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Opções</td>
    </tr>
    <?php
    foreach($data as $contato){
        echo "<tr>";
        echo "<td>{$contato['nome']}</td>";
        echo "<td>{$contato['email']}</td>";
        echo "<td>
                <a href='formEdit.php?id=".$contato['id']."'>Editar</a>
                <a href='excluir.php?id=".$contato['id']."'>Excluir</a> 
             </td>";
        echo "</tr>";
    }
    ?>
</table>
<a href='formCad.php'>Adicionar Contato</a>
</body>
</html>






