<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Configuration extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function ConfigServer(){
			return parent::select('config',null,null);

		}
		public function EditConfigServer(){
			$response =  parent::update('config',$_POST,['id_config' => $_POST['id_config']]);
			
			if(isset($response) == true){
				return ['erro'=> false, 'menssage' => 'Servidor Editado com sucesso'];
			}else{
				return ['erro'=> true, 'menssage' => 'Peoblemas na confguração do servidore'];
			}

		}
		public function InsertConfigServer(){
			$id = parent::insert('config',$_POST);
			if(isset($id)){
				return ['erro'=> false, 'menssage' => 'Servidor configurado com sucesso'];
			}else{
				return ['erro'=> true, 'menssage' => 'Peoblema na configurado do servidor'];
			}			

		}		

	}
?>