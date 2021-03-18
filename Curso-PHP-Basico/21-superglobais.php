<?php  
	//Variáveis Superglobais
	/*
		* $GLOBALS
		* $_SERVER
		* $_REQUEST
		* $_POST
		* $_GET
		* $_FILES
		* $_ENV
		* $_COOKIE
		* $_SESSION
	*/
$a = 1;
$b = -3;
$c = -10;

function solucionarEquacao(){
	//Uso da variável superblobal $GLOBALS.

	$ind_a = $GLOBALS['a'];
	$ind_b = $GLOBALS['b'];
	$ind_c = $GLOBALS['c'];
	
	$delta = ($ind_b**2) - (4 * $ind_a * $ind_c);

	$x1 = ((-$ind_b) + sqrt($delta))/ 2 * $ind_a;

	$x2 = ((-$ind_b) - sqrt($delta))/ 2 * $ind_a;

	echo "Raízes<br>";
	echo "x<sup>'</sup> = $x1";

	echo "<br>";

	echo "x<sup>\"</sup> = $x2";

}

solucionarEquacao();

echo "<hr>";
//_$SERVER

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";
//$_POST e $_GET




?>