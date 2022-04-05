<?php

require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Renatinho Renato Botura da costa");
$pessoa->setEndereco("<br> Rua dos mitos banana 2 ");
echo $pessoa->getNome();
echo $pessoa->getEndereco();

$empresa = new Empresa();
$empresa->setRazaoSocial("<br> Escola XPTO LTDS");
echo $empresa->getRazaoSocial();

?>