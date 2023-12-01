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
	$app->loadModels('painel');

    $data = new Clientes();

    $log = $data->AtualizarCliente();


	//print_r($log);

    
  if( $log["erro"] == false ){
    header("location: " . $app->index() . "/painel/lista-clientes" . Helper::notification(true,$log["mensagem"]));
}else{
    header("location: " . $app->index() . "/painel/lista-clientes" . Helper::notification(false, $log["mensagem"]));
}
 