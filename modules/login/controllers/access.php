<?php
session_start();

print_r($_POST);

	require dirname(dirname(dirname(__DIR__))) . "/autoload.php";

	$app = new Module();
	# include all modules of default module
	$app->loadModels('login');

    print_r($_POST);
	$email = trim($_POST['user_email']); 
	$password = $_POST['user_password'];

	$valid = new User();

	$log = $valid->Login($email, $password);

	print_r($log);

	///print_r($_SESSION['id_user]);


	if($log['error'] == false){

		// o true do header notification significa o modal verde não confundir com o erro do log;
		header("location: " . $app->index() . "/panel/app" . Helper::notification(true,$log["mensagem"]));

	}else{

		header("location: " . $app->index() . "/login/access" . Helper::notification(false,$log["mensagem"]));
	} 