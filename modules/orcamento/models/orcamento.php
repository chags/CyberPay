<?php
	class Orcamento extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}

		public function BuscarCliente(){

			//return parent::select("clientes", null, null, " WHERE 'cliente_nome' LIKE '%" . $_GET['value']. "%'");
			return parent::select("clientes", null, null, null);

		}
		public function BuscarProdutos(){

			return parent::select('produtos',null,null,null);

		}
		public function InserirOrcamento(){

			$data = [
				'orcamento_cliente_id' =>	$_POST['orcamento_cliente_id'],
				'orcamento_total_geral' =>  $_POST['orcamento_total_geral'] = preg_replace("/[^0-9]/", "", $_POST['orcamento_total_geral']),
				'orcamento_laudo' => $_POST['orcamento_laudo'],
				'orcamento_objetivo' => $_POST['orcamento_objetivo'],
				'orcamento_local_instalacao' => $_POST['orcamento_local_instalacao'],
				'orcamento_usuario_id' => $_POST['orcamento_usuario_id'],												
				'orcamento_status' => 1				
			];

			$id_orcamento =  parent::insert('orcamentos',$data, null,null);

			
				$config = [
					'config_orcamento_id'   => $id_orcamento,
					'config_prazo_entrega'  =>"A combinar",
					'config_frete'          => "Cif",
					'config_forma_pagamento'=> "Deposito, pix",
					'config_prazo_pagamento'=> "A combinar",
					'config_natureza_nota'  => "Serviço",
					'config_garantia'	=>	"120 dias",
					'config_tecnico'  => "Antonio Gomes",
					'config_observacao'  => "* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>
					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>
					*Garantia 120 dias.<br>"							
				];

			  parent::insert('confi',$config, null,null);


			foreach ($_POST['id_produto'] as $id) {

				$produto =  parent::select('produtos',null,['id_produto' => $id ],null);

				foreach ($_POST['quantidade'] as $quant) {
					$quantidade = $quant;
				}
					$item = [
						'item_orcamento_id' => $id_orcamento,
						'item_produto_id' => $produto[0]['id_produto'],
						'item_produto_nome' => $produto[0]['produto_nome'], 
						'item_produto_valor' =>$produto[0]['produto_valor_venda'],
						'item_produto_quant' => $quantidade,
						'item_produto_valor_total' => $quantidade * $produto[0]['produto_valor_venda']	
						];
				parent::insert('itens',$item, null,null);

				

			}
			if ($id_orcamento) {
				return ['erro' => false, 'mensagem' => 'Orçamento Criado com sucesso'];
			} else {
				return ['erro' => true, 'mensagem' => 'Erro na criação, tente novamente'];
			}
		}
	}
?>