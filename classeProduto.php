<?php
class Produto{
	protected $preco;
	protected $nome;
	
	public function __construct($vetor){
		$this->nome = $vetor["nome"];
		$this->preco = $vetor["preco"];
	}
	
	public function get_nome(){
		return $this->nome;
	}
	
	public function get_preco(){
		return $this->preco;
	}
	
	public function set_preco($valor){
		$this->preco = $valor;
	}
	
	public function exibe_dados(){
		echo "<label>Nome</label>: ".$this->nome."<br />";
		echo "<label>Preço</label>: ".$this->preco."<br />";
	}

	public function exibe_produto_compra($id){
		$this->exibe_dados();
		echo "<form method='post'>
				<input type='hidden' name='id' value='$id' />
			    <input type='submit' value='Adicionar ao carrinho' />
			   </form>";
	}

}

?>