<?php

$nome = "Tobias Silva";

function exibirNome(){
	global $nome;
	echo $nome;
}

exibirNome();
echo "<hr>";
/***********************/
function exibirCidade(){
	global $cidade;
	$cidade = "São Luis";
}
exibirCidade();
echo $cidade;

echo "<hr>";
/****************/
$a = 1;
$b = 3;
$c = 7;

function somar(){
	//Acessando valores de variáveis em escopo global através da variável GLOBALS;
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
	
}
somar();
?>