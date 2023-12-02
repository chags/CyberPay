<?php

/**
 * @Atomic framework
 * @document: Model de exemplo
 * @version: 1.0.0
 * @description: 
 * @author: Chags
 * @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 */

class Usuarios extends DB
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
			$pasta = parent::path() . "/storage/avatar/";
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
	public function ListaUsuarios(){
			return parent::select('usuarios', null, null, null);
	}
	public function ListaCargo(){
		return parent::select('cargo', null, null, null);
	}
	public function InserirUsuario(){

		$_POST['usuario_imagem'] = $this->getAvatar();

		$_POST['usuario_senha'] = md5($_POST['usuario_senha']);

		$_POST['usuario_cargo_id'] = 6;

		$id = parent::insert('usuarios', $_POST, null);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'Usuario cadastrado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro no cadastro, tente novamente'];
		}
	}
	public function EditarUsuario($id_usuario){

		$user =  parent::select('usuarios', null,['id_usuario' => $id_usuario], null);
		$user = $user[0];
		return $user;
	}
	public function AtualizarUsuario(){
		$_POST['usuario_imagem'] = $this->getAvatar();


		if($_POST['usuario_imagem'] == null){
			unset($_POST['usuario_imagem']);
			
		}elseif(isset($_POST['usuario_imagem']['erro'])){
			return $_POST['usuario_imagem'];
		}
		
		# alterando e criptografando asenha
		if($_POST['usuario_senha'] == ""){
			unset($_POST['usuario_senha']);
		}else{
			$_POST['usuario_senha'] =   md5($_POST['usuario_senha']);
		}


		$id = parent::update('usuarios', $_POST, ['id_usuario' => $_POST['id_usuario']]);

		if ($id) {
			return ['erro' => false, 'mensagem' => 'Usuário Atualizado com sucesso'];
		} else {
			return ['erro' => true, 'mensagem' => 'Erro na atualização, tente novamente'];
		}
	}
	public function VerUsuarios($id_usuario){
		$tb['uniao'] = "";
		$tb['campo'] = "";
		$tb['regiao'] = "";
		$tb['distrito'] = "";
		$tb['clube'] = "";
		$tb['usuarios'] = "";
		$tb['cargo'] = "";
		$rel['uniao.id_uniao'] = 'campo.campo_uniao_id';
		$rel['campo.id_campo'] = 'regiao.regiao_campo_id';
		$rel['regiao.id_regiao'] = 'distrito.distrito_regiao_id';
		$rel['distrito.id_distrito'] = 'clube.clube_distrito_id';
		$rel['clube.id_clube'] = 'usuarios.usuario_clube_id';
		$rel['usuarios.usuario_cargo_id'] = 'cargo.id_cargo';
		
		return parent::select_join($tb, $rel, ['id_usuario' => $id_usuario], null);
	}
	public function Perfil($id_usuario){
		$tb['uniao'] = "";
		$tb['campo'] = "";
		$tb['regiao'] = "";
		$tb['distrito'] = "";
		$tb['clube'] = "";
		$tb['usuarios'] = "";
		$rel['uniao.id_uniao'] = 'campo.campo_uniao_id';
		$rel['campo.id_campo'] = 'regiao.regiao_campo_id';
		$rel['regiao.id_regiao'] = 'distrito.distrito_regiao_id';
		$rel['distrito.id_distrito'] = 'clube.clube_distrito_id';
		$rel['clube.id_clube'] = 'usuarios.usuario_clube_id';
		return parent::select_join($tb, $rel, ['id_usuario' => $id_usuario], null);
	}
	// write your code here...
}
