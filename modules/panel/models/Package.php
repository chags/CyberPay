<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class Package extends DB
	{
		public function __construct(){
			# construct default
			parent::__construct();
		}
		public function ListPackages(){
			return parent::select( 'package', null, null, null);
		}
		public  function InsertPackage(){

			$id_package =  parent::insert( 'package', $_POST);

			$price = [
				'price_package_id' => $id_package,	
				'price_monthly'	 => 0,
				'price_bimonthly'	=> 0,
				'price_quarterly'	=> 0,
				'price_semiannual'	=> 0,
				'price_yearly'	=> 0,
				'price_biennial' => 0,	
				'price_triennial' => 0
			];

			$id_price = parent::insert( 'price',$price);

			$a = parent::select( 'config', null, null);

			$client = new \GuzzleHttp\Client();
			$headers = [
			'Authorization' => trim($a[0]['config_token']),
			'Content-Type' => 'text/plain',
			'Cookie' => 'sessionid=vy1dtpfqdbkhhhlevsacppfv0mmi693s'
			];
			$body = '{
				"serverUserName": "'.trim($a[0]["config_serverUserName"]).'",
				"controller": "submitPackage",
				"packageName": "'.$_POST['packageName'].'",
				"diskSpace": "'.$_POST['diskSpace'].'",
				"bandwidth": "'.$_POST['bandwidth'].'",
				"dataBases": "'.$_POST['data_Bases'].'",
				"ftpAccounts": "'.$_POST['ftpAccounts'].'",
				"emails": "'.$_POST['emails'].'",
				"allowedDomains": "'.$_POST['allowedDomains'].'",
				"allowedDomains": "'.$_POST['allowedDomains'].'",
				"api": "1",
				"allowFullDomain":"'.$_POST['allowedDomains'].'"
			}';

			$request = new \GuzzleHttp\Psr7\Request('POST', trim($a[0]['config_url_server']), $headers, $body);
			$res = $client->sendAsync($request)->wait();
			$response =  $res->getBody();
			$log = json_decode($response, true);

			if($log['status'] == 1){
				return ['erro'=> false, 'mensage' => 'Pacote criado com sucesso'];
			}else{
				if($id_package && $id_price){
					 parent::delete('package', [ 'id_package' => $id_package], null);				
					 parent::delete('package', [ 'id_package' => $id_price], null);					
				}
				return ['erro'=> true, 'mensage' => $log['error_message']];
			}	
				
		}
		public function EditPackage($id){

			$data  = parent::select( 'package', null, ['id_package' => $id], null);
			return  $data[0];

		}
		public function UpdatePackage(){

			$data = parent::Update( 'package', $_POST, ['id_package' => $_POST['id_package']], null);
			$a = parent::select( 'config', null, null);

			$client = new \GuzzleHttp\Client();
			$headers = [
			'Authorization' => trim($a[0]['config_token']),
			'Content-Type' => 'text/plain',
			'Cookie' => 'sessionid=vy1dtpfqdbkhhhlevsacppfv0mmi693s'
			];
			$body = '{
				"serverUserName": "'.trim($a[0]["config_serverUserName"]).'",
				"controller": "submitPackageModify",
				"packageName": "'.$_POST['packageName'].'",
				"diskSpace": "'.$_POST['diskSpace'].'",
				"bandwidth": "'.$_POST['bandwidth'].'",
				"dataBases": "'.$_POST['data_Bases'].'",
				"ftpAccounts": "'.$_POST['ftpAccounts'].'",
				"emails": "'.$_POST['emails'].'",
				"allowedDomains": "'.$_POST['allowedDomains'].'",
				"allowedDomains": "'.$_POST['allowedDomains'].'",
				"api": "1",
				"allowFullDomain":"'.$_POST['allowedDomains'].'"
			}';

			print_r($body);

		
			$request = new \GuzzleHttp\Psr7\Request('POST', trim($a[0]['config_url_server']), $headers, $body);
			$res = $client->sendAsync($request)->wait();
			$response =  $res->getBody();
			$log = json_decode($response, true);
	
			if($log['status'] == 1){
				return ['erro'=> false, 'mensage' => 'Pacote atualizado com sucesso'];
			}else{
				return ['erro'=> true, 'mensage' => $log['error_message']];
			}		
		}
		public function EditPrice($id_package){
			$data = parent::select( 'price',null,['price_package_id' => $id_package]);
			return $data[0];
		}
		public function ListPrice($id_package){
			$tb['package'] = "";
			$tb['price'] = "";	
			$rel['package.id_package'] = 'price.price_package_id';
			$data = parent::select_join( $tb,$rel,['id_package' => $id_package]);
			return $data[0];
		}
		public function UpdatePrice(){
			$log = parent::update('price',$_POST,['id_price' => $_POST['id_price']]);
			if($log){
				return ['erro'=> false, 'mensage' => 'Pacote atualizado com sucesso'];
			}else{
				return ['erro'=> true, 'mensage' => 'problema na atualizaçãodo pacote'];
			}

		}		
	}

?>