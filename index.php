<?php

require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Renatinho Renato Botura da costa");
echo $pessoa->getNome();

?>