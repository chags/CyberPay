<?php
session_start();
$user = $_SESSION;
if(isset($user['id_usuario']) == ""){
  header("location: " . $app->index() . "/login/acesso" . Helper::notification(false,"Acesso negado"));

}

	require dirname(dirname(dirname(__DIR__))) . "/autoload.php";
	$app = new Module();
	$app->loadModels('orcamento');

	$data = new Orcamento();

	print_r($_POST);

	$log = $data->InserirOrcamento();
	

	if( $log["erro"] == false ){
		header("location: " . $app->index() . "/painel/listar-orcamentos" . Helper::notification(true,$log["mensagem"]));
	}else{
		header("location: " . $app->index() . "/orcamento/inserir" . Helper::notification(false, $log["mensagem"]));
	}
	