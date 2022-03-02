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



}