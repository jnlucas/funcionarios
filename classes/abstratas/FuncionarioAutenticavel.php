<?php

namespace classes\abstratas;


use classes\abstratas\Funcionario; 

abstract class FuncionarioAutenticavel extends Funcionario{


	public $senha;


	public function autenticar($senha){

		return $this->senha == $senha;
	}


}
?>