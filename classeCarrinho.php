<?php
	class Carrinho{
		
		private $forma_pagamento;
		private $frete;
		private $lista_produto;
		
		public function set_forma_pagamento($f){
			$this->forma_pagamento = $f;
		}
		
		public function set_frete($cep){
			$this->frete = "Grátis";
			//implementacao futura.
			//$this->frete = $cep; // Errado!!!
		}

		public function get_forma_pagamento(){
			if($this->forma_pagamento==null){
				return("ainda não foi informado uma forma de pagamento.");
			}
			return $this->forma_pagamento;
		}

		public function get_frete(){
			if($this->frete==null){
				return("ainda não foi informado um frete.");
			}
			return $this->frete;
		}
		
		public function add_lista_produto(Produto $p){
			
			$this->lista_produto[] = $p;
		}
		
		public function exibe_produtos(){
			if(sizeof($this->lista_produto)==0){
				echo "Carrinho Vazio.<br />";
			}
			else{
				foreach($this->lista_produto as $p){
					$p->exibe_dados();
					}
					echo "<br />";
				}
			}
		
		
	}
?>