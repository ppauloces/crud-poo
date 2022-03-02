<?php

namespace App\Entity;

class Vaga {

	/**
	*IDENTIFICADOR UNICO DA VAGA
	*@var integer
	*/
	public $id;

	/**
	*Título da vaga
	*@var string
	*/
	public $titulo;

	/**
	*Descrição da vaga
	*@var string
	*/
	public $descricao;

	/**
	*Define se a vaga está ativa ou não
	*@var string(s/n)
	*/
	public $ativo;

	/**
	*Data em que a vaga foi lançada
	*@var string
	*/
	public $data;

	/**
	*Método responsável para cadastrar vaga
	*@return boolean
	*/
	public function cadastrar(){
		//DEFINIR A DATA
		$this->data = data('Y-m-d H:i:s');
		//INSERIR A VAGA NO BANCO

		//ATRIBUIR O ID DA VAGA NA INSTANCIA

		//RETORNAR SUCESSO
	}


}