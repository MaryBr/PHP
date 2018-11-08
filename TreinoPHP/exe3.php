<?php
	$sexo = isset($_GET["sexo"])? $_GET["sexo"]:["sexo não informado"];
	$idade = isset($_GET['idade'])?$_GET['idade']:["idade não informado"];



	echo $sexo;

	if ($sexo =='f' && $idade<25)
		echo "Aceita";
	else
		echo "Não aceita";

?>