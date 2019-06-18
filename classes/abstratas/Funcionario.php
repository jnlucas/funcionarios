<?php


namespace classes\abstratas;
use classes\abstratas\FuncionarioFactory; 

abstract class Funcionario implements FuncionarioFactory{

	public $nome;

	public $cpf;

	protected $salario;

	protected static $piso = 1056.00;

	

	abstract public function getBonificacao();

	

	final public function aumentarSalario(){

		$this->salario *= 1.3;

	}


	public static function setPiso($valor){

		self::$piso = $valor;
	}



	/**
	* utilizando DesignPatterns PHP factory
	* Criado método statico para criacao dos objetos funcionarios
	*
	*/
	public static function create($cargo,$cpf,$salario){

		if(!$salario){
			$salario = self::$piso;
		}

		return new $cargo($cpf,$salario);
	}

	/**
	* Construtor definido como privado, pois a unica forma de instanciar um profissional é pelo factory
	*/
	private function __construct($cpf,$salario){
		
		$this->cpf = $cpf;
		$this->salario = $salario;


	}

	


}
?>