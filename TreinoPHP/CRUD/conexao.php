<?php

	if ($_POST["acao"]=="inserir")
		inserirPessoa();

	function inserirPessoa(){
		$banco= new mysqli("localhost", "root","", "agenda");
		$sql="INSERT INTO pessoa(id, nome, nascimento, endereco, telefone)"." VALUES ('{$_POST["nome"]}' , '{$_POST["nascimento"]}' ,'{$_POST["endereconome"]}' ,'{$_POST["telefone"]}')";

		$banco->query($sql);
		$banco->close();
	}
	header("Location:index.php");
?>