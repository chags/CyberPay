<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Produtos extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
        public function ListaProdutos(){
            return parent::select('produtos', null, null, null);
        }
    
        public function InserirProdutos(){

			$_POST['produto_valor_base'] = preg_replace("/[^0-9]/", "", $_POST['produto_valor_base']);
			$_POST['produto_valor_venda'] = preg_replace("/[^0-9]/", "", $_POST['produto_valor_venda']);

			$id = parent::insert('produtos', $_POST, null);

			if(isset($id)){
			return ['erro'=> false, 'mensagem' => 'Produto cadastrado com sucesso'];
			}else{
				return ['erro'=> true, 'mensagem' => 'Erro no cadastro, tente novamente'];
			}
		}
        public function EditarProdutos($id_produto){
			$produto =  parent::select('produtos',null,['id_produto' => $id_produto]);
			$produto = $produto[0];
			return $produto;
		}
        public function AtualizarProdutos(){

			
			$_POST['produto_valor_base'] = preg_replace("/[^0-9]/", "", $_POST['produto_valor_base']);
			$_POST['produto_valor_venda'] = preg_replace("/[^0-9]/", "", $_POST['produto_valor_venda']);

			$id = parent::update('produtos',$_POST, ['id_produto' => $_POST['id_produto']]);

			if($id){
				return ['erro'=> false, 'mensagem' => 'Produto Atualizado com sucesso'];
			}else{
				return ['erro'=> true, 'mensagem' => 'Erro na atualização, tente novamente'];
			}

		}
		// write your code here...
	}
?>