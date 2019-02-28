<?php

ini_set("display_errors",1);
require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;

$diretor = new Diretor("233.333.332.33",1000.00);


$designer = new Designer("233.333.444.33",1000.00);


echo $designer->getBonificacao(); echo "<br>";

echo $diretor->getBonificacao();

 var_dump($diretor);
 var_dump($designer);

$designer->aumentarSalario();
$diretor->aumentarSalario();

 var_dump($diretor);
 var_dump($designer);

?>