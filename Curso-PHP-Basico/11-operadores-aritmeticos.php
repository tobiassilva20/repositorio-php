<?php 
/* Operadores aritméticos.
 * Adição (+)
 * Subtração (-)
 * Divisão (/)
 * Multiplicação (*)
 * Modulo (%)
 * Exponenciação (**)
 */

//Resolução de uma equação quadrática.
echo "Equação => x <sup>2</sup> - 3x - 10 = 0";
echo "<br>";

$a = 1; 
$b = -3;
$c = -10;

$delta = ($b**2) - (4 * $a * $c);

$x1 = ((-$b) + sqrt($delta))/ 2 * $a;

$x2 = ((-$b) - sqrt($delta))/ 2 * $a;

echo "Raízes<br>";
echo "x<sup>'</sup> = $x1";

echo "<br>";

echo "x<sup>\"</sup> = $x2";

?>