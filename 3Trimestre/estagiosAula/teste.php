<?php
require_once __DIR__."/classes/Vaga.php";

$v1 = new Vaga("Desenvolvimento web", "Google");
$v1->save();
$v2 = new Vaga("Desenvolvimento Mobile", "Apple");
$v2->save();
$v3 = new Vaga("Analista de testes", "Microsoft");
$v3->save();

$vagas = Vaga::findall();
var_dump($vagas);

Vaga::mudaStatus(2);

$vagas = Vaga::findall();
var_dump($vagas);

?>