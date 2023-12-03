<?php
	
	$module   = new Module();
	$template = new TEngine();

	# validate view
	if( $module->uri(2) == false ){
		$module->goToModule();
	}

	# validate session
/* 	if( Session::auth() ){
		header("Location: " . $module->index() . "/panel/atomic");
	} */

	$validate = $module->validate();

	if( $validate['error'] == false ){
		
		# default routes
		$template->set([
			'app' => [
				'title'   => 'panel de Acesso',
				'file' 	  => 'app',
			    'packages' => ['modern']				
			],
			'company' => [
				'title'   => 'company',
				'file' 	  => 'company',
			    'packages' => ['modern']				
			],
			'configuration' => [
				'title'   => 'Configuration',
				'file' 	  => 'configuration',
			    'packages' => ['modern']				
			],
			'form' => [
				'title'   => 'exemple form',
				'file' 	  => 'form',
			    'packages' => ['modern']				
			],
			'table' => [
				'title'   => 'exemple table',
				'file' 	  => 'table',
			    'packages' => ['modern-table']				
			],			
			'listar-packages' => [
				'title'   => 'Lista de Pacotes',
				'file' 	  => 'list-packages',
			    'packages' => ['modern-table']				
			],			
			'insert-packages' => [
				'title'   => 'Inserir Produto',
				'file' 	  => 'inserir-produtos',
			    'packages' => ['modern-table']				
			],			
			'edit-packages' => [
				'title'   => 'Editar Produto',
				'file' 	  => 'editar-produtos',
			    'packages' => ['modern-table']				
			],			
			'list-users' => [
				'title'   => 'Lista Usuarios',
				'file' 	  => 'list-users',
			    'packages' => ['modern-table']				
			],			
			'insert-user' => [
				'title'   => 'Inserir Usuario',
				'file' 	  => 'inserir-usuario',
			    'packages' => ['modern-table']				
			],			
			'edit-user' => [
				'title'   => 'Editar Usuario',
				'file' 	  => 'editar-usuario',
			    'packages' => ['modern-table']				
			],						
			'list-orde' => [
				'title'   => 'Lista Orcamentos',
				'file' 	  => 'listar-orcamentos',
			    'packages' => ['modern-table']				
			],	
			'list-clients' => [
				'title'   => 'Lista Cliente',
				'file' 	  => 'list-clients',
			    'packages' => ['modern-table']				
			],	
			'edit-client' => [
				'title'   => 'Editar Cliente',
				'file' 	  => 'editar-cliente',
			    'packages' => ['modern-table']				
			],					
			'insert-client' => [
				'title'   => 'Inserir Cliente',
				'file' 	  => 'inserir-cliente',
			    'packages' => ['modern-table']				
			],	
			'edit-config' => [
				'title'   => 'Editar configuração do orcamento',
				'file' 	  => 'editar-configuracao',
			    'packages' => ['modern-table']				
			],						
			'list-packages' => [
				'title'   => 'Lista Pacotes',
				'file' 	  => 'list-packages',
			    'packages' => ['modern-table']				
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