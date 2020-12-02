<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
	
	
	<div class="login">
		<h1>Cadastrar Usuário</h1>
		
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nom" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="text" name="emai" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	<div>	
	</body>
</html>