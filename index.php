<?php

require_once("classeCarrinho.php");
require_once("classeProduto.php");

session_start();

if(!isset($_SESSION["carrinho"])){
	$_SESSION["carrinho"] = new Carrinho();
}

if(!empty($_POST)){
	$posicao = $_POST["id"];
	$p = $_SESSION["produto"][$posicao];
	$_SESSION["carrinho"]->add_lista_produto($p);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
	<h2>Seu Carrinho:</h2>
	
	<?php

	$_SESSION["carrinho"]->exibe_produtos();
	?>
	<hr />
	<h3>Produtos disponíveis para compra:</h3>
	<?php
	
	if(!isset($_SESSION["produto"])){
		echo "não há produtos no sistema.";
	}
	else{
		foreach($_SESSION["produto"] as $i=>$p){
			$p->exibe_produto_compra($i);
			echo "<br />";
		}
	}
	?>
	
	</body>
</html>