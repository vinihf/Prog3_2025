<?php
$usuario = [
    'nome' => 'Vinicius',
    'email' => 'vinicius.ferreira@feliz.ifrs.edu.br',
    'preferencias' => ['dark', 'pt-BR']
];

//Armazenar em formato JSON
$_SESSION['usuario'] = json_encode($usuario);

echo $_SESSION['usuario'];
echo "<br>";
//Recuperar em formato de array, 
// true para ser array associativo
$usuario = json_decode($_SESSION['usuario'], true);

echo $usuario['nome']; //Vinicius
echo "<br>";
echo $usuario['preferencias'][0]; //dark

?>
