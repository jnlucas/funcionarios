<?php

namespace classes\abstratas;

use classes\abstratas\Funcionario;


interface FuncionarioFactory{


	public static function create($cargo,$cpf,$salario) ;
}

?>