<?php
	/**
	* @Atomic framework
	* @document: Model de exemplo
	* @version: 1.0.0
	* @description: 
	* @author: Chags
	* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
	*/

	class User extends DB
	{
		private $user;
		private $office;
		private $rel_user;
		private $session;
	
		function __construct()
		{
			# code...
			parent::__construct();
			$this->user['user'] = [];
			$this->user['office'] = [];
			$this->rel_user['user.user_office_id'] = "office.id_office";
			$this->session = (Session::auth()) ? Session::get() : false;
		}

		#recupera dados do user no banco 
		public function get($filter = null,$extra = null)
		{
			return parent::select_join($this->user,$this->rel_user,$filter,$extra);
		}

		#funcao para logar no sistema
		public function login($mail, $pass)
		{
			$tb_user['user'] = [];
			$tb_user['office'] = [];
			$rel_user['user.user_office_id'] = "office.id_office";

			$log = parent::select_join( $tb_user,$rel_user, ['user_email' => $mail]);

			//print_r($log); 
			
 			if($log){
				if( $log[0]['user_password'] == md5($pass) ){
					if( Session::auth() ){
						return [
							'error' => false,
							'mensagem' => 'Usuário já logado, redirecionando...'
						];
					}else{ 
						$rash = uniqid();
						$session_code = $log[0]['id_user'] ."_". $rash;
						$dado = parent::update('user', ['user_session' => $session_code],['user_email' => $mail],null  );
						$acesso = parent::select_join( $tb_user,$rel_user, ['user_email' => $mail]);
						$_SESSION = $acesso[0];

						return [
							'error' => false,
							'mensagem' => 'Bem-vindo ' . $log[0]['user_name']
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

        public function Cadastraruser(){
			//print_r($_POST);
            #criptografando a senha


            $_POST['user_senha'] = md5($_POST['user_senha']);
            #tirando caratertes da variavel do cpf
            $_POST['user_cpf'] =   preg_replace("/[^0-9]/", "", $_POST['user_cpf']);
           
           
            #verificando cpf
            $cpf = parent::select('users', null, ['user_cpf' => $_POST['user_cpf']]);

            //print_r($cpf);

            if(isset($cpf[0]['user_cpf'])){
                return ['erro'=> true, 'mensagem' => "Este CPF já esta cadastrado!"];
            }


            #verificando email
            $email = parent::select('users', null, ['user_email' => $_POST['user_email']]);

            if(isset($email[0]['user_email'])){
                return ['erro'=> true, 'mensagem' => "Este E-mail já esta cadastro"];
            }


            #cadastrando o user no banco
            $_POST['user_cargo'] = 1;

            $cadastro = parent::insert('users',$_POST, null);

			$log = parent::select_join($this->tb_user,$this->rel_user,['id_user' => $cadastro[0]['user_id']]);

			$_SESSION = $log[0];

            return ['erro'=> false, 'mensagem' => "user cadastrado com sucesso"];



        }

		public function DestroiSession($id_user){

			parent::update('users', ['user_session' => null],['id_user' => $id_user] );

		}
	}
?>