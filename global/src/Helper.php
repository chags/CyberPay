<?php
	
/**
* @Atomic framework
* @document: Helper 
* @version: 1.0.0
* @description: recurso para criaçãode classes globais
* @author: Chags
* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
*/
	class Helper
	{
		private $app;

		public static function money($money){
			return number_format(($money / 100),2);
		}

		public static function _date($date){
			return date("d/m/Y",strtotime($date));
		}

		public static function notification($success = true, $message = "Notificação de sistema"){
			if( $success ){
				return "/alert/" . base64_encode("success=" . $message);
			}else{
				return "/alert/" . base64_encode("error=" . $message);
			}
		}


		public static function imagem($name = "")
		{
			$app = new Module();
			$pathImg = $app->path() . "/storage/imagem/" . $name;
			$indexImg = $app->index() . "/storage/imagem/" . $name;
			$defaultImg = $app->index() . "/storage/imagem/linux.png";
			if( $name != "" ){
				return (file_exists($pathImg) and is_file($pathImg)) ? $indexImg : $defaultImg;
			}else{
				return $defaultImg;
			}
		}
		public static function logo($name = "")
		{
			$app = new Module();
			$pathImg = $app->path() . "/storage/logo/" . $name;
			$indexImg = $app->index() . "/storage/logo/" . $name;
			$defaultImg = $app->index() . "/storage/logo/logo-cyberpay.png";
			if( $name != "" ){
				return (file_exists($pathImg) and is_file($pathImg)) ? $indexImg : $defaultImg;
			}else{
				return $defaultImg;
			}
		}
		public static function sanitize($string){
			$from 	= array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
			$_to 	= array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');
			return str_replace($from, $_to, $string);
		}

		public static function theme($id = ""){

			$app = new Module();
			$data = $app->path() . "/storage/theme/template1.json";
			
			$json = file_get_contents($data);
			$dados = json_decode($json);
			
			$theme = [];
			$theme['config_video']      = $dados->config_video;
			$theme['config_ground']     = $dados->config_ground;
			$theme['config_info']       = $dados->config_info;
			$theme['config_instagram']  = $dados->config_instagram;
			$theme['config_youtube']    = $dados->config_youtube;
			$theme['config_facebook']   = $dados->config_facebook;
			$theme['config_historia']   = $dados->config_historia;
			$theme['config_endereco']   = $dados->config_endereco;
			$theme['config_foto1']      = $dados->config_foto1;
			$theme['config_foto2']      = $dados->config_foto2;
			$theme['config_foto3']      = $dados->config_foto3;
			$theme['config_foto4']     = $dados->config_foto4;

			return $theme;


		}

		public static function imgTheme($name = "")
		{
			$app = new Module();
			$pathImg = $app->path() . "/storage/theme/" . $name;
			$indexImg = $app->index() . "/storage/theme/" . $name;
			$defaultImg = $app->index() . "/storage/theme/foto.png";
			if( $name != "" ){
				return (file_exists($pathImg) and is_file($pathImg)) ? $indexImg : $defaultImg;
			}else{
				return $defaultImg;
			}
		}

		public static function status($name = ""){
			switch($name){
				case 1:
                    return '<span class="badge badge-sm diesase-badge badge-info">Ativo</span>';
                    break;
                case 2:
                    return '<span class="badge badge-sm diesase-badge badge-waning">Inativo</span>';
                    break;
				case 3:
					return '<span class="badge badge-sm diesase-badge badge-success">Aprovado</span>';
                    break;
				case 4:
                    return '<span class="badge badge-sm diesase-badge badge-danger">reprovado</span>';
                    break;
                default:
                    return '<span class="badge badge-sm diesase-badge badge-danger">Desconhecido</span>';
                    break;
            }
		}

	}
?>