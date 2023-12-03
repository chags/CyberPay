<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class User extends DB
{
	//private $config;

	public function __construct(){
		# construct default
		parent::__construct();
		$this->config = parent::select('config', null, null, null);

	}

	public function ListUserClient(){
			return parent::select('user', null, ['user_office_id' => 1], null);
	}

	public function ListUsers(){
		return parent::select('user', null, null, null);
}


	public function FetchUsers(){

		$client = new \GuzzleHttp\Client();		
		$headers = [
		  'Authorization' => 'Basic YWRtaW46QEhhcnBpYTQ4OSMj',
		  'Content-Type' => 'text/plain'
		];
		$body = '{
			"serverUserName": "admin",
			"controller": "fetchUsers"
		}';
		$request = new \GuzzleHttp\Psr7\Request('POST', 'https://h7x.net.br:8090/cloudAPI/', $headers, $body);
		$res = $client->sendAsync($request)->wait();
		
		//tratar os dados caso de errado 
		$dado = $res->getBody();
		$data = json_decode($dado, true);
		$lista = json_decode($data['data'], true);
		return $lista;
		
	}

}
