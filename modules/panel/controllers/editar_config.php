<?php
//print_r($_POST);
	/**
	* @Atomic framework
	* @document: Cotrollers de editar Campo
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

    $data = new Config();

    $log = $data->AtualizarConfig();

	//print_r($log);

  
  if( $log["erro"] == false ){
    header("location: " . $app->index() . "/panel/lista-orcamento" . Helper::notification(true,$log["mensagem"]));
}else{
    header("location: " . $app->index() . "/panel/lista-orcamento" . Helper::notification(false, $log["mensagem"]));
} 
