<?php 
/* is_array($array) => verifica se uma variável é um array.
 * in_array($valor, $array) verifica se um determinado valor está presente em um array.
 * array_keys($array) retorna um novo array com as chaves do array passado como parâmetro.
 * array_values($array) retorna um novo array com as valores do array passado como parâmetro.
 * array_merge($array1, $array2) cria um nvo array com os dois passados como paramêntro.
 * array_pop($array) remove o ultimo elemento de um array.
 * array_shift($array) remove o primeiro elemento de um array.
 * array_unshift($array, "valores") adicona um ou mais elementos no inicio de um array.
 * array_push($array, "valores") adiciona um ou mais elementos no final de um array.
 * array_combine($array1, $array2) combina dois arrays onde o primeiro será as chaves
 * array_sum($array) calcula a soma dos elementos de um array.
 * explode("/", 20/01/2021) transforma uma string em array.
 * implode("-", $array) transforma um array em string. 
 */

	$nomes = array("primeiro" => "Rodrigo", "segundo" => "Maria", "terceiro" => "José",
				"quarto" => "Felipe");
	if(is_array($nome)):
		echo "É um array";
	else:
		echo "Não é um array";
	endif;

	echo "<hr>";

	if(in_array("Rodrigo", $nomes)):
		echo "Existe no array";
	else:
		echo "Não existe no array";
	endif;

	$chaves = array_keys($nomes);
	echo "<br>";
	print_r($chaves);

	$values = array_values($nomes);
	echo "<br>";
	print_r($values);

	echo "<hr>";

	$carros = array("Celta", "Uno", "Gol");
	$motos = array("CG", "POP", "BIZ");

	$veiculos = array_merge($carros, $motos);
	print_r($veiculos);

	echo "<hr>";
	$frutas = array("Uva", "Maça", "Banana");
	
	array_push($frutas, "Laranja", "Acerola");
	print_r($frutas);

	sort($frutas);
	print_r($frutas);

	echo "<hr>";

	$keys = array("campeao", "vice", "terceiro");
	$values = array("Brazil", "Argentina", "Equador");
	$classificacao = array_combine($keys, $values);
	print_r($classificacao);

	echo "<hr>";

	$notas = array(1 , 5, 3, 9, 10);
	$soma = array_sum($notas);
	echo $soma;

	echo "<hr>";

	$data = "30/02/2020";
	$nova_data = explode("/", $data);
	print_r($nova_data);

	echo "<hr>";

	$nomes = array("Tobias", "Silva");
	$string = implode(" ", $nomes);
	echo $string;
 ?>