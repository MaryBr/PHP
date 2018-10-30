<?php

	$servername = "localhost";
	$database = "agenda";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
	    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
	}

	else {
		echo "Banco de dados conectado <br>";

		$nome = $_POST['nome'];
		$nascimento = $_POST["nascimento"];
		$telefone = $_POST['telefone'];
		$endereco = $_POST['endereco'];



		if ($_POST["acao"]=="inserir"){

			$sql="INSERT INTO  `pessoa`( `nome`, `nascimento`, `endereco`, `telefone`) VALUES";
			$sql.="('$nome', '$nascimento', '$endereco', '$telefone')";

			mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
			mysqli_close($conn);
			echo "Usuário cadastrado";

		}
		
	}
		header("Location:index.php");
	
	
	mysqli_close($conn);


	
?>