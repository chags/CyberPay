<?php
	/**
	* @Atomic framework
	* @document: Cotrollers de União
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

    $data = new Usuarios();

    $log = $data->InserirUsuario();

    
  if( $log["erro"] == false ){
    header("location: " . $app->index() . "/painel/lista-usuarios" . Helper::notification(true,$log["mensagem"]));
}else{
    header("location: " . $app->index() . "/painel/inserir-usuarios" . Helper::notification(false, $log["mensagem"]));
}


