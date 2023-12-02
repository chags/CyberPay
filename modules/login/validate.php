<?php
	
	$module   = new Module();
	$template = new TEngine();

	# validate view
	if( $module->uri(2) == false ){
		$module->goToModule();
	}

	# validate session
/* 	if( Session::auth() ){
		header("Location: " . $module->index() . "/painel/atomic");
	} */

	$validate = $module->validate();

	if( $validate['error'] == false ){
		
		# default routes
		$template->set([
			'access' => [
				'title'   => 'Access',
				'file' 	  => 'access',
			    'packages' => ['login']				
			],
			'cadastro' => [
				'title'   => 'Cadastro',
				'file' 	  => 'cadastro',
			    'packages' => ['login']				
			],
			'lembrar-senha' => [
				'title'   => 'Lembrar Senha',
				'file' 	  => 'lembrar-senha',
			    'packages' => ['login']				
			]		
					
			
		]);
		$template->error([
			'title' => 'Falha na geração da pagina',
			'file' => '404',
			'packages' => ['login']
		]);

	}else{
		# show error core
		$module->coreError("Internal Error" , $validate['message']);
	}


?>