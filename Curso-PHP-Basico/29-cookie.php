<?php  
// Cookie


// Cria um cookie
setcookie('user', 'Tobias', time() - 3600);

// Para remover um cookie, basta apenas fornecer uma validade em segudos com sinal negativo.
setcookie('email', 'tobiassilva@hotmail.it', time() - 3600);
setcookie('busca_recente', 'Curso de PHP', time() - 3600);

print_r($_COOKIE);


?>