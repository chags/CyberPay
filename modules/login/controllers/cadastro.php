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
	$app->loadModels('login');

	//print_r($_POST);


    $dados = new User();

    $log = $dados->CadastrarUser();

  //print_r($response);

  if( $log["erro"] == false ){
    header("location: " . $app->index() . "/panel/acesso" . Helper::notification(true,$log["mensagem"]));
}else{
    header("location: " . $app->index() . "/login/perfil" . Helper::notification(false, $log["mensagem"]));
}
