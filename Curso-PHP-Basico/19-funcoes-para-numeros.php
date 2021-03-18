<?php  
//Funções para números
/*  number-format
	round
	ceil
	floor
	rand
*/

$db = 1234.56;
echo "Número bruto: $db";
$preco = number_format($db, 2, ",", ".");
echo "<br>";
echo "Número formatado: $preco";

echo "<hr>";
echo round(3.6);
echo "<br>";
echo ceil(4.1);
echo "<br>";
echo floor(8.9);
echo "<br>";
echo rand(1,100);

?>