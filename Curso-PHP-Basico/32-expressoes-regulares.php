<?php
	// Expressões regulares
	/*
	 * ^ marca o início da expressão
	 * $ marca o final da expressão
	 * /i indica um padrão case sensitive
	 * [] indica um conjunto de caracteres
	 * {} marca as ocorrências - ?{0, 1}, *{0,}, +{1,}
	 * /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
	 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/ 
	 */
	
	$string = "z";
	$padrao = "/^[a-z]{2}$/";

	// padrao para válidação de e-mail
	$email = "contato@email.com";
	$padrao_email = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

	if (preg_match($padrao_email, $email)) {
		# code...
		echo "Válido";
		echo "<hr>";
		echo($email);
	}else{
		echo "Inválido";
		echo "<hr>";
	}
?>
