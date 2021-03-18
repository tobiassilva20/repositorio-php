<?php 
	//Base64
	echo "<h3>Base64</h3><br/>";
	$senha = "123456";
	$novaSenha = base64_encode($senha);
	echo "Base64: ".$novaSenha."<br>";

	$decodificada = base64_decode($novaSenha);
	echo "Sua senha: $decodificada";

	echo "<hr>";

	//MD5
	echo "<h3>Md5</h3><br/>";
	echo "Sua senha: $senha<br>";
	echo "Md5: ". md5($senha);

	echo "<hr>";
	//SHA-1
	echo "<h3>Sha-1</h3><br/>";
	echo "Sua senha: $senha<br>";
	echo "Sha-1: ". sha1($senha);

	echo "<hr>";

	//Algoritmo nativo do PHP para encriptção de senhas(Bcrypt)
	$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
	echo "<h3>Senhas seguras com algoritmo de senhas do php</h3><br/>";
	echo "Sua senha: $senha<br>";
	echo "Bcript: ". $senhaSegura;

	$senha_db = '$2y$10$t0t5.n1/ue9Cw0sRWDvyO./I58HPMdROqzMBxzJ9G1p3y5oaQfpDW';

	echo "<br>";

    echo (password_verify($senha, $senha_db)) ? "Senha confere." : "Senha inválida!" ;
	
	


?>