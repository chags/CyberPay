<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Company extends DB
{
	public function __construct(){
		# construct default
		parent::__construct();
	}
	private function  getAvatar(){
		#limpando os campos tirando virgula e pontos
		#pegando o arquivo da imagem
		if(($_FILES['imagem']['tmp_name'] != "")){
			$foto = $_FILES['imagem']['tmp_name'];
			$tamanho_permitido = 1024000; //1 MB
			$pasta = parent::path() . "/storage/imagem/";
		}else{
			return null;
		}

		//DELETANDO A IMAGEM ANTIGA
		$image = parent::select('user', null, ['id_user' => $_POST['id_user']]);
		$resultado = @unlink($pasta.$image[0]['user_image']);
		


		if (!empty($foto)) {
			$file = getimagesize($foto);
			//TESTA O TAMANHO DO ARQUIVO
			if ($_FILES['imagem']['size'] > $tamanho_permitido) {
				return ["erro" => true, "mensagem" => "arquivo muito grande, mais de 1 mega"];
			}
		}

		//TESTA A EXTENSÃO DO ARQUIVO
		if (!preg_match('/^image\/(?:gif|jpg|jpeg|png)$/i', $file['mime'])) {

			return ["erro" => true, "mensagem" => "extensão da imagem não permitida"];
		}

		//CAPTURA A EXTENSÃO DO ARQUIVO
		$extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

		//gerando nome do arquivo
		$nome =  str_replace(" ", "_", $_POST['user_name']);

		$nome_arquivo = $nome ."_". $_POST['user_cpf']."-".uniqid(). '.' . $extensao;

		//MONTA O CAMINHO DO NOVO DESTINO
		$novoDestino = $pasta . $nome_arquivo;

		#colocando o arquivo de imagem na pasta de destino
		move_uploaded_file($foto, $novoDestino);

		#guadando o nome do arquivo de imagem
		return  $nome_arquivo;
	}
	public function EditCompany(){

		$company =  parent::select('company',null, null);
		return $company[0];
	}
	public function UpdateCompany(){
		$_POST['company_logo'] = $this->getAvatar();

		if($_POST['company_logo'] == null){
			unset($_POST['company_logo']);
			
		}elseif(isset($_POST['company_logo']['erro'])){
			return $_POST['company_logo'];
		}
		
		$id = parent::update('company', $_POST, ['id_company' => $_POST['id_company']]);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'company Atualizado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro na atualização, tente novamente'];
		}
	}
}
