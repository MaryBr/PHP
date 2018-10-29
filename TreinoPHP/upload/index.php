<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php

			//verifica se a pessoa enviou o arquivo
			if (isset($_POST['enviar_formulario'])){
				//array com formatos permitidos
				$formatosPermitidos  = array("png","jpg", "jpeg", "gif");
				$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

				if(in_array($extensao, $formatosPermitidos)){
					$pasta = "arquivos/";
					$temporario = $_FILES['arquivo']["tmp_name"];
					$novoNome = uniqid().".$extensao"; //nome único

					if(move_uploaded_file($temporario, $pasta.$novoNome))
					{
						$msg= "Upload foi feito com sucesso.";
					}
					else
						$msg= "Erro ao fazer o upload.";
				}
				else
					$msg ="Formato inválido";
			}
			echo $msg;
		
		?>
		<form  action="<?php echo $_SERVER['PHP_SELF'];?> " method= "POST" enctype="multipart/form-data">
			<input type="file" name="arquivo"><br>
			<input type="submit" name="enviar_formulario">

		</form>

	</body>
</html>