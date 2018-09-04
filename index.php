<?php
	require_once 'pessoa.php';
	require_once 'pessoa2.php';

	use pessoa2;
	$pessoa = new pessoa2\pessoa('joao',35,'1.85');
	$pessoa->andar();

?>