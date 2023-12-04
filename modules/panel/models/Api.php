<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Api extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function UmExemplo(){

			$client = new \GuzzleHttp\Client();	
			$headers = [
			'Authorization' => 'Basic YWRtaW46QEhhcnBpYTQ4OSMj',
			'Content-Type' => 'text/plain',
			'Cookie' => 'sessionid=vy1dtpfqdbkhhhlevsacppfv0mmi693s'
			];
			$body = '{
				"serverUserName": "admin",
				"controller": "submitUserCreation",
				"firstName": "Lorena",
				"lastName": "chagas",
				"email": "lorena@th7.com.br",
				"userName": "lorena",
				"password": "2525",
				"websitesLimit":1,
				"selectedACL": "user"
			}';
			$request = new \GuzzleHttp\Psr7\Request('POST', 'https://h7x.net.br:8090/cloudAPI/', $headers, $body);
			$res = $client->sendAsync($request)->wait();
			echo $res->getBody();

		}

		// write your code here...
	}
?>