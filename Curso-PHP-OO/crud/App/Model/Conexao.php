<?php 
	
namespace App\Model;
	
	//Classe que gerencia a conexão com o banco de dados utilizando o padrão singleton.
	class Conexao{

		private static $instace;

		public static function getConn(){
			if(!isset(self::$instace)){
				self::$instace = new \PDO('mysql:host=localhost;dbname=pdo', 'root', 
					'');
			}
		
			return self::$instace;			
		}
	}

 ?>