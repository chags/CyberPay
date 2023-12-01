<?php

	require dirname(dirname(dirname(__DIR__))) . "/autoload.php";
	$app = new Module();
	$app->loadModels('orcamento');

	$data = new Orcamento();

	$log = $data->BuscarProdutos();
	
	// Converta o array em formato JSON
	$json_response = json_encode($log);
	
	// Defina o cabeçalho para indicar que o conteúdo é JSON
	header('Content-Type: application/json');
	
	// Envie o JSON de volta para o cliente
	echo $json_response;