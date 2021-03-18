<?php  
//Funções para strings
/*  strtoupper
 	strtolower
 	substr
 	str_pad
 	str_reapeat
 	strlen
 	str_replace
 	strpos
 */

 $nome = "tobias silva";

 $nome_upper = strtoupper($nome);
 echo "$nome_upper";

echo "<br>";

 $nome_lower = strtolower($nome_upper);
 echo "$nome";

 echo "<hr>";

 $mensagem = "Olá mundo";

 echo substr($mensagem, 4);

  echo "<hr>";

  $objeto = "mouse";
  $objeto_pad = str_pad($objeto, 11, "*", STR_PAD_BOTH);
  echo "$objeto_pad";

 echo "<hr>";

 $frase = str_repeat("Gol", 10);
 echo "$frase";
echo "<br>Comprimento da frase:".strlen($frase);

 echo "<hr>";

$texto = "Olá world!";
$novoTexto = str_replace("world", "mundo", $texto);
echo "$novoTexto";

echo "<hr>";

echo strrpos($texto, "world");



?>