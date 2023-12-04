<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Client extends DB
{
	public function __construct(){
		# construct default
		parent::__construct();
	}

	public function ListClient(){
		$tb['user'] = "";
		$tb['address'] = "";
		$rel['user.id_user'] = 'address.address_user_id';

		return  parent::select_join($tb, $rel, null, null);
	}
	public function InsertClient(){

		$Data = parent::select('user',null,['user_email' => $_POST['_user_email']]);

		if(isset($Data[0]['user_email'])){
			return ['erro' => true, 'mensagem' => 'Esse email já existe'];
		}

		//dados de usuario
		$user['user_name'] = $_POST['user_name'];
		$user['user_email'] = $_POST['user_email'];
		$user['user_password'] =   md5($_POST['user_password']);
		$user['user_phone'] = preg_replace('/[^0-9]/', '', $_POST['user_phone']);
		$user['user_office_id'] = 1;
		$user['user_status'] = true;

		//dados de endereço do usuario
		$address['address_zipcode'] = preg_replace('/[^0-9]/', '', $_POST['address_zipcode']);			
		$address['address_number'] = $_POST['address_number'];
		$address['address_street'] = $_POST['address_street'];	
		$address['address_complement'] = $_POST['address_complement'];
		$address['address_neighborhood'] = $_POST['address_neighborhood'];		
		$address['address_city'] = $_POST['address_city'];
		$address['address_state'] = $_POST['address_state'];	
		$address['address_country'] = strtolower($_POST['address_country']);				
		
		$id_user = parent::insert('user', $user);
		
		if ($id_user) {
			
			$address['address_user_id']  = $id_user;
			$id_address = parent::insert('address', $address);
			
			if($id_address){
				return ['erro' => false, 'mensagem' => 'Cliente cadastrado com sucesso'];
			} else {
				return ['erro' => true, 'mensagem' => 'Erro no cadastro, tente novamente'];
			}
		}else{
			return ['erro' => true, 'mensagem' => 'Erro no cadastro, tente novamente'];
		}

	}
	public function EditClient($id_user){

		$tb['user'] = "";
		$tb['address'] = "";
		$rel['user.id_user'] = 'address.address_user_id';

		$client =  parent::select_join($tb, $rel, null, null);
		return $client[0];
	}
	public function UpdateClient(){


		$user['user_name'] = $_POST['user_name'];
		$user['user_email'] = $_POST['user_email'];

		if($_POST['user_password'] != ''){
			$user['user_password'] = md5(trim($_POST['user_password']));
		}
		var_dump($user);
		$user['user_phone'] = preg_replace('/[^0-9]/', '', $_POST['user_phone']);
		$user['user_office_id'] = 1;
		$user['user_status'] = true;

		var_dump($user);
		
		//dados de endereço do usuario
		$address['address_zipcode'] = preg_replace('/[^0-9]/', '', $_POST['address_zipcode']);			
		$address['address_number'] = $_POST['address_number'];
		$address['address_street'] = $_POST['address_street'];	
		$address['address_complement'] = $_POST['address_complement'];
		$address['address_neighborhood'] = $_POST['address_neighborhood'];		
		$address['address_city'] = $_POST['address_city'];
		$address['address_state'] = $_POST['address_state'];	
		$address['address_country'] = strtolower($_POST['address_country']);				
		
		$id_user = parent::update('user', $user, ['id_user' => $_POST['id_user']]);
		$id_address = parent::update('address', $address, ['id_address' => $_POST['id_user']]);


		if ($id_user && $id_address) {
			
			if($id_address){
				return ['erro' => false, 'mensage' => 'Usuário Atualizado com sucesso'];
			} else {
				return ['erro' => true, 'mensage' => 'Erro na atualização, tente novamente'];
			}
		}else{
			return ['erro' => true, 'mensage' => 'Erro na atualização, tente novamente'];
		}
	}
	public function DeleteClient(){

		$res_user = parent::delete('user', ['id_user' => $_POST['id_user']]);
		$res_address = parent::delete('address', ['address_user_id' => $_POST['id_user']]);	

			if($res_user && $res_address) {
				return ['erro' => false, 'mensage' => 'Usuário Deletado com sucesso'];
			} else {
				return ['erro' => true, 'mensage' => 'Erro, tente novamente'];
			}

	}

}
