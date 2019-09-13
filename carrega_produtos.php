<?php
//este arquivo carrega na sessao os produtos que poderão
//ser comprados (adicionados ao carrinho de compras


require_once("classeProduto.php");
session_start();

$vetor = array("nome"=>"Mouse sem Fio", "preco"=>"15.00");
$p1 = new Produto($vetor);
$_SESSION["produto"][] = $p1;


$vetor = array("nome"=>"Teclado", "preco"=>"25.00");
$p2 = new Produto($vetor);
$_SESSION["produto"][] = $p2;


$vetor = array("nome"=>"Pendrive 16Gb", "preco"=>"28.00");
$p3 = new Produto($vetor);
$_SESSION["produto"][] = $p3;


?>
