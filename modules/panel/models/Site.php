<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Site extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function ListWebsites($id_user){

			return parent::select('website', null,['wesite_user_id' => $id_user]);
			
		}

		// write your code here...
	}
?>