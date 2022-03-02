<?php 

namespace App\Db;

use \PDO;

class DataBase{

	/**
	*HOST de conexão com o banco de dados
	*@var string
	*/
	const HOST = 'localhost';

	/**
	*Nome do banco de dados
	*@var string
	*/
	const NAME = 'paulo_vagas';

	/**
	*Usuario do banco de dados
	*@var string
	*/
	const USER = 'root';

	/**
	*Senha do banco de dados
	*@var string
	*/
	const PASS = '';

	/**
	*Nome da tabela a ser manipulada
	*@var string
	*/
	private $table;

	/**
	*Instancia de conexão com o banco de dados
	*@var PDO
	*/
	private $connection;

	/**
	*Instancia a tabela e define a conexão
	*@param string $table
	*/
	public function __construct($table = null){
		$this->table = $table;
		$this->setConnection();
	}

	/**
	*Metodo responsavel por criar uma conexao com o banco de dados
	*/
	private function setConnection(){
		try{
			$this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER, self::PASS);
		}catch(PDOException $e){
			die('ERROR: '.$e->getMessage());
		}
	}
}