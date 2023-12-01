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
			'inserir' => [
				'title'   => 'Criar orçamento',
				'file' 	  => 'inserir',
			    'packages' => ['semantic']				
			],
			'editar' => [
				'title'   => 'Ediar Orçamento',
				'file' 	  => 'editar',
			    'packages' => ['semantic']				
			],			
			'pdf' => [
				'title'   => 'Criar orçamento',
				'file' 	  => 'pdf',
			    'packages' => ['boostrap']				
			],			
		
		]);
		$template->error([
			'title' => 'Falha na geração da pagina',
			'file' => '404',
			'packages' => ['materialize']
		]);

	}else{
		# show error core
		$module->coreError("Internal Error" , $validate['message']);
	}


?>