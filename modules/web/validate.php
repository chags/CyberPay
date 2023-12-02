<?php
	
	$module   = new Module();
	$template = new TEngine();

	# validate view
	if( $module->uri(2) == false ){
		$module->goToModule();
	}
	$validate = $module->validate();

	if( $validate['error'] == false ){
		
		# default routes
		$template->set([
			'host' => [
				'title'   => 'My Host',
				'file' 	  => 'home',
			    'packages' => ['cybertheme']				
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