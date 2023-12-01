<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Orcamento extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function ListaOrcamentos(){
			$tb['orcamentos'] = [];
			$tb['clientes'] = [];
			$rel['clientes.id_cliente'] = "orcamentos.orcamento_cliente_id";			

			return parent::select_join( $tb, $rel, null, null);
		}

		public function InserirOrcamento(){

			return parent::insert( 'orcamentos', $_POST, null, null);

			
		}
		public function PDF(){


			$tb['clientes'] =[];
			$tb['orcamentos'] =[];
			$tb['itens'] =[];
			$tb['confi'] =[];
			$rel['clientes.id_cliente'] = "orcamentos.orcamento_cliente_id";
			$rel['itens.item_orcamento_id'] = "orcamentos.id_orcamento";
			$rel['orcamentos.id_orcamento'] = "confi.config_orcamento_id";			

			$data =  parent::select_join( $tb, $rel, ['id_orcamento' => $_POST['id_orcamento']], null);
			$data = $data[0];

			$tbl['itens'] =[];
			$tbl['produtos'] = [];
			$rels['itens.item_produto_id'] = "produtos.id_produto";

			$itens['itens'] =  parent::select_join( $tbl, $rels, ['item_orcamento_id' => $_POST['id_orcamento']], null);

			$result = array_merge($itens, $data);
			return  $result;
			
		}

		public function Editarconfig($id){

			$data  = parent::select( 'confi', null, ['config_orcamento_id' => $id], null);
			return  $data[0];

		}
		public function AtualizarConfig(){

			$data =  parent::update( 'confi', $_POST, ['config_orcamento_id' => $_POST['config_orcamento_id']], null);

			 if(isset($data) == true){
				return ['erro'=> false, 'mensagem' => 'Produto Atualizado com sucesso'];
			}else{
				return ['erro'=> true, 'mensagem' => 'Erro na atualização, tente novamente'];
			}

		}
	}
?>