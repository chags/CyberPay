<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Empresas extends DB
{
	public function __construct(){
		# construct default
		parent::__construct();
	}
	public function EditarEmpresa(){

		$empresa =  parent::select('empresas',null, null);
		return $empresa[0];
	}
}
