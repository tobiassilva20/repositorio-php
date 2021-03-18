<?php  
// Manipulação de arquivos 
/*
fopen();
fclose();
fwrite();
!feof();
fgets();
filesize;
*/


$arquivo = 'arquivo.txt';
$conteudo = "Manipulando arquivos com PHP\r\n";

// Gravação de conteúdo no arquivo
function gravar_conteudo($arquivo, $conteudo){
	// Abrindo o arquivo
	$aberto = fopen($arquivo, 'a');

	// Gravando no arquivo
	fwrite($aberto, $conteudo);

	// Fechando o arquivo
	fclose($aberto);

}


// Leitura de conteúdo do arquivo
function ler_conteudo($arquivo){
	// Abrindo o arquivo
	$aberto = fopen($arquivo, 'r');

	// Lendo do arquivo
	while (!feof($aberto)) {
		echo fgets($aberto, filesize($arquivo)). "<br>";
	}

	// Fechando o arquivo
	fclose($aberto);
}

gravar_conteudo($arquivo, $conteudo);

ler_conteudo($arquivo);

?>