<?php 
//Operadores de comparação.

//igualdade == e desigualdade !=
$a = 10;
$b = 10;

if($a == $b):
	echo "Verdadeiro";
else:
	echo "Falso";
endif;

echo "<hr>";

//identico === e não identico !==
if($a === $b):
	echo "Verdadeiro";
else:
	echo "Falso";
endif;

echo "<hr>";

//maior ou igual >= e menor ou igual <=
if($a <= $b):
	echo "Verdadeiro";
else:
	echo "Falso";
endif;
echo "<hr>";

 ?>