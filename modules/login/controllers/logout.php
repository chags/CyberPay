<?php
session_start();
$user = $_SESSION;
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

	$data = new User(); 
	//$log = $data->DestroiSession($user['id_user']);




    #destruindo dados de session do usuario
    session_destroy();

    #deslogando usuario do sistema
    header("location: " . $app->index() . "/login/acesso" . Helper::notification(true,"você saiu do sistema"));

