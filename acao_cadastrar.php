<?php

	require_once('conexao.php');

	$cadastro = $_POST['cadastro'];



			$query1 = 'INSERT INTO cargo (
						  	 cadastro)
						  	 VALUE(
						   	"'.$cadastro.'")';

			
			$res1 = mysql_query($query1, $link);
			
			if($res1 == true){

				$status = 'OK';

			}else{

				$status = 'erro';
			}

	


	header('Location: index.php?pag=cadastrar&status=OK');
	exit;


	die;

	?>

