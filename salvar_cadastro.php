<?php
	require 'config/config.php';
	if( isset($_GET['salvar']) ){

		//filtrar cada um dos campos
<<<<<<< HEAD
=======

>>>>>>> 4993dd6639cfca254b29401ef30de400e149f9a4
		$insere = mysqli_query($conn, "INSERT INTO usuarios (nome, idade, email, senha) VALUES ('{$_GET['nome']}','{$_GET['idade']}','{$_GET['email']}','{$_GET['senha']}') ");

		if($insere) {
			
			header("location: seguranca.php?pag=home.php");
		
		} else {
			echo 'Falha ao cadastrar';
		}
	}