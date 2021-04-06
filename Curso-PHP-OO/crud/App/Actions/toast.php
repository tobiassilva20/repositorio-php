<?php 
	
	// Sessão
	session_start();
	
	if (isset($_SESSION['mensagem'])) {
	$mensagem = $_SESSION['mensagem'];
	$status = $_SESSION['status'];

?>
	<script type="module">

 		import BulmaNotification from './App/Assets/toast_files/bulma-notifications.js';

		let notif;
		window.onload = () => {
  			notif = new BulmaNotification();
    		notif.show("Mensagem!", "<?php echo $mensagem; ?>", "<?php echo $status; ?>", 3000);

    		//document.querySelector('#submit').addEventListener('click', showNotification);
    	};
	</script>
		
<?php
	}
	session_unset();
 ?>

 	