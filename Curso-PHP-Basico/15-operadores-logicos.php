<?php  
//Operadores lógicos
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 36;
$nome = "Tobias";

if ($idade == 36 && $nome == "Tobias") {
	echo "Verdadeiro";
}else{
	echo "Falso";
}

echo "<hr>";

if ($idade == 36 || $nome == "Tobias") {
	echo "Verdadeiro";
}else{
	echo "Falso";
}

echo "<hr>";

if ($idade == 36 xor $nome == "Tobias") {
	echo "Verdadeiro";
}else{
	echo "Falso";
}

echo "<hr>";

if (!$idade == 36) {
	echo "Verdadeiro";
}else{
	echo "Falso";
}

?>