<?php
	$num1 = isset($_GET['num1'])?$_GET['num1']:0;
	$num2 = isset($_GET['num2'])?$_GET['num2']:0;
	$soma = $num1 + $num2;

	if($soma>20)
		$soma+=8;
	else if ($soma<=20)
		$soma-=5;

	echo $soma;

?>