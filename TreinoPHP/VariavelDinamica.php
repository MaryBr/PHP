<?php
	$cidade = "Mariana";
	$$cidade = "Antônio Dias"; //variável dinamica

	echo $Mariana;
	//echo $cidade;
	echo '<hr>';

	$carros = array("bmw", "hilux");
	$carros [7]="camaro";
	print_r($carros);
	echo'<br>';
	echo $carros[0];
	echo'<br>';
	echo $carros[7];

	echo '<hr>';

	echo count($carros);//quantidade de lementos que existem no vetor
	echo '<hr>';

	foreach ($carros as $valor) {
			echo $valor."<br>";
		}	

	echo '<hr>';
	//array associativo
	$pessoa = array('nome' =>"Marina" , 'idade'=>33, 'cidade'=> "Ouro Preto" );		
	echo $pessoa['idade'];

	foreach ($pessoa as $key => $value) {
		echo $key .': ' .$value .'<br>';
	}
	echo '<hr>';

	//array multidimensional
	$estilo = array("rock" =>array("led zeppelin","Pearl Jam", "Queen"),
					"pop"=> array ("Madonna", "Britney Spears", "Little Mix"),
					"eletronica" =>array("Diplo", "Skrillex", "Calvin Harris"),
					);
	echo $estilo['rock'][0];
	echo '<br>';

	foreach ($estilo as $key => $value) {
		foreach ($value as $value2) {
			echo $key. ': '.$value2 . '<br>';
		}		
	}
	echo '<hr>';

	
?>