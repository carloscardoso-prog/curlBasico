<?php 
	$iniciar = curl_init('curlBasico.php');

	curl_setopt($iniciarm CURLOPT_RETURNTRANSFER, true);

	$dados = array(
			'nome' => 'Carlos',
			'email' => 'carlos@silva.com.br',
			'mensagem' => 'Amo programar!'
		);

	curl_setopt($iniciar, CURLOPT_POST, true);
	curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);
	curl_exec($iniciar);
	curl_close($iniciar);
 ?>