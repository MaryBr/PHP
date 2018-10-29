<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form  action="<?php echo $_SERVER['PHP_SELF'];?> " method= "POST" enctype="multipart/form-data">
			<input type="file" name="arquivo"><br>
			<input type="submit" name="enviar_formulario">

		</form>

	</body>
</html>