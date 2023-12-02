<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Company extends DB
{
	public function __construct(){
		# construct default
		parent::__construct();
	}
	public function EditCompany(){
		$company =  parent::select('company',null, null);
		return $company[0];
	}
}
