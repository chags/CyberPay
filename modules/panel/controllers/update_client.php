<?php
	/**
	* @Atomic framework
	* @document: Cotrollers de editar União
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/
	# autoload application
	require dirname(dirname(dirname(__DIR__))) . "/autoload.php";
	$app = new Module();
	# include all modules of default module
	$app->loadModels('panel');

	print_r($_POST);

    $data = new Client();

    $log = $data->UpdateClient();


	//print_r($log);

    
  if( $log["erro"] == false ){
    header("location: " . $app->index() . "/panel/list-clients" . Helper::notification(true,$log["mensage"]));
}else{
    header("location: " . $app->index() . "/panel/list-clients" . Helper::notification(false, $log["mensage"]));
}
 