<?php 
include ("cabecalho.php"); 
?>

<!DOCTYPE html>

<html lang="pt-BR">
	
	<body>
		<div id="corpo">
		<form action="grava_portifolio.php" method="post">
		
			<p>
				<label>Nome da Atividade: </label>
				<input type="text" name="nome" required="required" placeholder="Nome da Atividade"/>
			</p>
			<p>
				<label>Link: </label>
				<input type="text" name="link" required="required" placeholder="http://nonono.nonono.nonono"/>
				
			</p>
			<p>
				<label>Data: </label>
				<input type="date" name="data" required="required"/>
			</p>
			
			<p>
			<label>Arquivo: </label>
			<input type = "file" name = "files" />
			</p>
			
			<p>
				<input type="submit" value="Enviar"/>
			</p>
		     </div>
		</form>
	</body>
	
</html>