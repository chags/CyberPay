<?php
	/**
	* @Atomic framework
	* @document: Cotrollers de exemplos
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

	$data = new configuration();

	$log = $data->InsertConfigServer();
    
	if( $log["erro"] == false ){
		header("location: " . $app->index() . "/panel/configuration" . Helper::notification(true,$log["menssage"]));
	}else{
		header("location: " . $app->index() . "/panel/configuration" . Helper::notification(false, $log["menssage"]));
	}
	 