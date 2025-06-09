<?php

$diretorio = "../POST/";
$arquivos = scandir($diretorio);

foreach ($arquivos as $arquivo) {
    if (is_file($diretorio . DIRECTORY_SEPARATOR . $arquivo)) {
        echo $arquivo . "<br>";
    }
}