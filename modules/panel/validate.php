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
			'empresa' => [
				'title'   => 'Empresa',
				'file' 	  => 'empresa',
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
			'listar-produtos' => [
				'title'   => 'Lista de Produtos',
				'file' 	  => 'listar-produtos',
			    'packages' => ['modern-table']				
			],			
			'inserir-produtos' => [
				'title'   => 'Inserir Produto',
				'file' 	  => 'inserir-produtos',
			    'packages' => ['modern-table']				
			],			
			'editar-produtos' => [
				'title'   => 'Editar Produto',
				'file' 	  => 'editar-produtos',
			    'packages' => ['modern-table']				
			],			
			'lista-usuarios' => [
				'title'   => 'Lista Usuarios',
				'file' 	  => 'lista-usuarios',
			    'packages' => ['modern-table']				
			],			
			'inserir-usuario' => [
				'title'   => 'Inserir Usuario',
				'file' 	  => 'inserir-usuario',
			    'packages' => ['modern-table']				
			],			
			'editar-usuario' => [
				'title'   => 'Editar Usuario',
				'file' 	  => 'editar-usuario',
			    'packages' => ['modern-table']				
			],						
			'listar-orcamentos' => [
				'title'   => 'Lista Orcamentos',
				'file' 	  => 'listar-orcamentos',
			    'packages' => ['modern-table']				
			],	
			'lista-clientes' => [
				'title'   => 'Lista Cliente',
				'file' 	  => 'lista-clientes',
			    'packages' => ['modern-table']				
			],	
			'editar-cliente' => [
				'title'   => 'Editar Cliente',
				'file' 	  => 'editar-cliente',
			    'packages' => ['modern-table']				
			],					
			'inserir-cliente' => [
				'title'   => 'Inserir Cliente',
				'file' 	  => 'inserir-cliente',
			    'packages' => ['modern-table']				
			],	
			'editar-configuracao' => [
				'title'   => 'Editar configuração do orcamento',
				'file' 	  => 'editar-configuracao',
			    'packages' => ['modern-table']				
			]							
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