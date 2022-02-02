<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$msg = $_POST['mensagem'];	

	$result_contact = "INSERT INTO login_website VALUES ('$nome', '$email', '$mensagem')";
	
 ?>