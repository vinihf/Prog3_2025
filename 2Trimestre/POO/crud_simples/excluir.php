<?php
$connection = new \mysqli("localhost","root","","contatos");
$connection->set_charset("utf8");
$sql = "delete from pessoas where id = {$_GET['id']}";
$result = $connection->query($sql);
header("location: index.php");