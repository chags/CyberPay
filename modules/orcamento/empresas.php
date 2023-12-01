<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Empresas extends DB
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
		$image = parent::select('usuarios', null, ['id_usuario' => $_POST['id_usuario']]);
		$resultado = @unlink($pasta.$image[0]['usuario_imagem']);
		


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
		$nome =  str_replace(" ", "_", $_POST['usuario_apelido']);

		$nome_arquivo = $nome ."_". $_POST['usuario_cpf']."-".uniqid(). '.' . $extensao;

		//MONTA O CAMINHO DO NOVO DESTINO
		$novoDestino = $pasta . $nome_arquivo;

		#colocando o arquivo de imagem na pasta de destino
		move_uploaded_file($foto, $novoDestino);

		#guadando o nome do arquivo de imagem
		return  $nome_arquivo;
	}
	public function EditarEmpresa(){

		$empresa =  parent::select('empresas',null, null);
		return $empresa[0];
	}
	public function AtualizarEmpresa(){
		$_POST['empresa_logo'] = $this->getAvatar();

		if($_POST['empresa_logo'] == null){
			unset($_POST['empresa_logo']);
			
		}elseif(isset($_POST['empresa_logo']['erro'])){
			return $_POST['empresa_logo'];
		}
		
		$id = parent::update('empresas', $_POST, ['id_empresa' => $_POST['id_empresa']]);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'Empresa Atualizado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro na atualização, tente novamente'];
		}
	}
}
