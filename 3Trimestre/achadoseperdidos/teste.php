<?php
require_once __DIR__."/classes/Item.php";

$i1 = new Item("Casaco azul","Quadra");
$i1->save();
$i2 = new Item("Moletom azul","Quadra");
$i2->save();
$i3 = new Item("Tênis azul","Quadra");
$i3->save();

Item::mudaStatus(2);

$itens = Item::findall();
var_dump($itens);
