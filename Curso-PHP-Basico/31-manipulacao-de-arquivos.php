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

$aberto = fopen($arquivo, 'a');



fwrite($aberto, $conteudo);
fclose($aberto);

echo "Gravação finalizada!";

?>