<?php  
/*** Escalares***/

//String
$nome = "Olá mundo!";

var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else: 
	echo "Not String";
endif;
echo "<hr>";

//int 
$idade = 36;
var_dump($idade);

if(is_int($idade)):
	echo "É um inteiro";
else: 
	echo "Não é um inteiro";
endif;
echo "<hr>";

//float

$altura = 1.70;
var_dump($altura);
if(is_float($altura)):
	echo "É um um float";
else: 
	echo "Não é um float";
endif;
echo "<hr>";

//boolean

$admin = true;
var_dump(admin);

if(is_float($altura)):
	echo "É um um booleano";
else: 
	echo "Não é um booleano";
endif;
echo "<hr>";

/******* Compostos*********/

//Array
//Arrays podem receber mais de um tipo de dados simultaneamente
$carros = array("Gol", "Uno", "Celta", 12, 20.6, true);
var_dump($carros);

echo "<hr>";
//Object
class Cliente{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Tobias");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um objeto";
else: 
	echo "Não é um objeto";
endif;
echo "<hr>";

/**********Especiais******/

$var_null = NULL;
var_dump($var_null);

?>