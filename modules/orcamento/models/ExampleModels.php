<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class ExampleModels extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function UmExemplo(){
			return [0 =>['id' => '1', 'nome'=> 'cristiano', 'endereco'=> 'rua colina', 'cpf' => '72958120324']];
		}

		// write your code here...
	}
?>