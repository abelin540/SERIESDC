<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
</head>
<body>
	<hr>
	Este es un anuncio de contacto de una persona x
	<hr>
	<form action="<?php echo base_url(); ?>/mandarPost" method="post"> 
		<label>Enviar mi nombre por post</label>
		<br>
		<input type="text" name="valor1">
		<br>
		<input type="text" name="valor2" placeholder="valor2">
		<br>
		<button>Enviar datos</button>
	</form>
</body>
</html>