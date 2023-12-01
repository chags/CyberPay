<?php
session_start();
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

    print_r($_POST);
	$email = trim($_POST['usuario_email']); 
	$senha = $_POST['usuario_senha'];

	$valid = new Usuarios();

	$log = $valid->Login($email, $senha);

	print_r($log);

	//print_r($_SESSION['id_usuarios]);


	if($log['error'] == false){

		// o true do header notification significa o modal verde não confundir com o erro do log;
		header("location: " . $app->index() . "/painel/app" . Helper::notification(true,$log["mensagem"]));

	}else{

		header("location: " . $app->index() . "/login/acesso" . Helper::notification(false,$log["mensagem"]));
	} 