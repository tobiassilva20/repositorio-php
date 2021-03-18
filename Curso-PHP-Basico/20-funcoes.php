<?php  
	//Criando funções

function exibirNome($nome){
	echo "Bem-vindo $nome";
}


exibirNome("Tobias");

echo "<hr>";

function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
	$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
	if ($media >= 7) {
		echo "$nome foi aprovado com a média: $media";
	}else{
		echo "$nome foi reprovado com a média: $media";
	}
}

calcularMedia("Tony", 7, 9, 8, 7);
echo "<br>";
calcularMedia("Zac", 5, 6, 8, 3);
?>