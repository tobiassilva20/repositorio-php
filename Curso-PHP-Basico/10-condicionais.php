<?php  
//Condicionais if/else

//Calcular IMC - Índice de Massa Corporal

//Peso em kg
$peso = 70;

//Altura em m
$altura = 1.7;
$imc = $peso/($altura*$altura);

if($imc < 18.5){
	echo "Seu IMC foi de: $imc o que representa magreza";
} else if ($imc >= 18.5 && $imc <= 24.9){
			echo "Seu IMC foi de: ".number_format($imc,1)." o que representa normal.";
		}else if ($imc >= 25 && $imc <= 29.9){
			echo "Seu IMC foi de: ".number_format($imc,1)." o que representa sobrepeso.";
		}else if ($imc >= 30 && $imc <= 39.9){
			echo "Seu IMC foi de: ".number_format($imc,1)." o que representa obesidade.";
		}else if ($imc >= 40){
			echo "Seu IMC foi de: ".number_format($imc,1)." o que representa obesidade grave.";
		};

echo "<hr>";
//Switch Case

$cor = "vermelho";
switch ($cor) {
	case "vermelho":
		echo "A cor é vermelho";
		break;
	case "vermelho":
		echo "A cor é branco";
		break;
	default:
		echo "Cor não reconhecida";
		break;
}





?>