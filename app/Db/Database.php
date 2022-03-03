<?php 

namespace App\Db;

use \PDO;
use \PDOException;

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
			$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die('ERROR: '.$e->getMessage());
		}
	}

	/**
	 * Método responsável por inserir dados no banco
	 * @param array $values [field => value]
	 * @return integer
	 */
	public function insert($values){
		$query = "INSERT INTO $this->table (titulo,descricao,ativo,data) VALUES (?,?,?,?)";
		echo $query; exit;
	}
}