<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Clientes extends DB
{
	public function __construct(){
		# construct default
		parent::__construct();
	}

	public function ListaClientes(){

		return parent::select('clientes', null, null, null);

	}

	public function InserirCliente(){

		$_POST['cliente_status'] = true;
		$_POST['cliente_cnpj'] = preg_replace('/[^0-9]/', '', $_POST['cliente_cnpj']);
		$_POST['cliente_telefone'] = preg_replace('/[^0-9]/', '', $_POST['cliente_telefone']);
		$_POST['cliente_CEP'] = preg_replace('/[^0-9]/', '', $_POST['cliente_CEP']);

		$cnpj = parent::select('clientes', ['cliente_cnpj'], ['cliente_cnpj' => $_POST['cliente_cnpj']]);
		
		if (isset($cnpj[0])) {
			return ['erro' => true, 'mensagem' => 'CNPJ já esta cadastrado'];
		}	
		
		$id = parent::insert('clientes', $_POST, null);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'Cliente cadastrado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro no cadastro, tente novamente'];
		}
	}
	public function EditarCliente($id_cliente){

		$user =  parent::select('clientes', null,['id_cliente' => $id_cliente], null);
		$user = $user[0];
		return $user;
	}
	public function AtualizarCliente(){

		$_POST['cliente_cnpj'] = preg_replace('/[^0-9]/', '', $_POST['cliente_cnpj']);
		$_POST['cliente_telefone'] = preg_replace('/[^0-9]/', '', $_POST['cliente_telefone']);
		$_POST['cliente_CEP'] = preg_replace('/[^0-9]/', '', $_POST['cliente_CEP']);


		$id = parent::update('clientes', $_POST, ['id_cliente' => $_POST['id_cliente']]);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'Usuário Atualizado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro na atualização, tente novamente'];
		}
	}
}
