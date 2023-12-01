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
		private $tb_usuario;
		private $rel_usuario;
		private $session;
	
		function __construct()
		{
			# code...
			parent::__construct();
			$this->tb_usuario['usuarios'] = [];
			$this->tb_usuario['cargo'] = [];
			$this->rel_usuario['usuarios.usuario_cargo_id'] = "cargo.id_cargo";
			$this->session = (Session::auth()) ? Session::get() : false;
		}

		#recupera dados do usuario no banco 
		public function get($filter = null,$extra = null)
		{
			return parent::select_join($this->tb_usuario,$this->rel_usuario,$filter,$extra);
		}

		#funcao para logar no sistema
		public function login($mail, $pass)
		{
			$tb_usuario['usuarios'] = [];
			$tb_usuario['cargo'] = [];
			$rel_usuario['usuarios.usuario_cargo_id'] = "cargo.id_cargo";

			$log = parent::select_join( $tb_usuario,$rel_usuario, ['usuario_email' => $mail]);

			//print_r($log); 
			
 			if($log){
				if( $log[0]['usuario_senha'] == md5($pass) ){
					if( Session::auth() ){
						return [
							'error' => false,
							'mensagem' => 'Usuário já logado, redirecionando...'
						];
					}else{ 
						$rash = uniqid();
						$session_code = $log[0]['id_usuario'] ."_". $rash;
						$dado = parent::update('usuarios', ['usuario_session' => $session_code],['usuario_email' => $mail],null  );
						$acesso = parent::select_join( $tb_usuario,$rel_usuario, ['usuario_email' => $mail]);
						$_SESSION = $acesso[0];

						return [
							'error' => false,
							'mensagem' => 'Bem-vindo ' . $log[0]['usuario_nome']
						]; 
					}
				}else{
					return [
						'error' => true,
						'mensagem' => 'Senha incorreta...'
					];
				}
			}else{
				return [
					'error' => true,
					'mensagem' => 'E-mail não cadastrado...'
				];
			}     
			
			
		}

        public function CadastrarUsuario(){
			//print_r($_POST);
            #criptografando a senha


            $_POST['usuario_senha'] = md5($_POST['usuario_senha']);
            #tirando caratertes da variavel do cpf
            $_POST['usuario_cpf'] =   preg_replace("/[^0-9]/", "", $_POST['usuario_cpf']);
           
           
            #verificando cpf
            $cpf = parent::select('usuarios', null, ['usuario_cpf' => $_POST['usuario_cpf']]);

            //print_r($cpf);

            if(isset($cpf[0]['usuario_cpf'])){
                return ['erro'=> true, 'mensagem' => "Este CPF já esta cadastrado!"];
            }


            #verificando email
            $email = parent::select('usuarios', null, ['usuario_email' => $_POST['usuario_email']]);

            if(isset($email[0]['usuario_email'])){
                return ['erro'=> true, 'mensagem' => "Este E-mail já esta cadastro"];
            }


            #cadastrando o usuario no banco
            $_POST['usuario_cargo'] = 1;

            $cadastro = parent::insert('usuarios',$_POST, null);

			$log = parent::select_join($this->tb_usuario,$this->rel_usuario,['id_usuario' => $cadastro[0]['usuario_id']]);

			$_SESSION = $log[0];

            return ['erro'=> false, 'mensagem' => "usuario cadastrado com sucesso"];



        }

		public function DestroiSession($id_usuario){

			parent::update('usuarios', ['usuario_session' => null],['id_usuario' => $id_usuario] );

		}
	}
?>