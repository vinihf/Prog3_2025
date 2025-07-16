<?php
if(isset($_GET['id'])){
    $connection = new \mysqli("localhost","root","","contatos");
	$connection->set_charset("utf8");
    $sql = "select * from pessoas where id ={$_GET['id']}";
	$result = $connection->query($sql);
	$item = array();
	$data = array();
	while($item = mysqli_fetch_array($result)){
		$data[] = $item;
	}
}
if(isset($_POST['botao'])){
    $connection = new \mysqli("localhost","root","","contatos");
	$connection->set_charset("utf8");
    $sql = "update pessoas set nome = '{$_POST['nome']}' ,email = '{$_POST['email']}' where id = {$_POST['id']} ";
	$result = $connection->query($sql);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Contato</title>
</head>
<body>
    <form action='formEdit.php' method='POST'>
        <?php
            echo "Nome: <input name='nome' value='{$data[0]['nome']}' type='text' required>";
        ?>
        <br>
        <?php
            echo "E-mail: <input name='email' value={$data[0]['email']} type='email' required>";
            echo "<input name='id' value={$data[0]['id']} type='hidden'>";
        ?>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>

